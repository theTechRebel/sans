<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

  public function index()
  {
    $this->view();
  }

  private function _makeRandomHash(){
    $seed = $this->session->userdata('user');
    $hash = sha1(uniqid($seed . mt_rand(), true));
    return $hash;
  }

  public function add(){
    //die(var_dump($_POST));

    if($this->session->userdata('transaction') == ""){
      $this->session->set_userdata('transaction', $this->_makeRandomHash());
    }

    $sizes = explode("[", $_POST['size']);
    $size = array();
    $i = 0;
    foreach ($sizes as $key => $value) {
      if(stristr($value, 'undefined') == FALSE){
        $size[$i] = $value;
      }
      $i ++;
    }

    $data = array(
               'id'      => $this->input->post('code'),
               'qty'     => $this->input->post('qty'),
               'price'   => $this->input->post('price'),
               'name'    => $this->input->post('name'),
               'options' => array('specifications' => $this->input->post('aob'),
                                  'size' => $size,
                                  'location'  =>$this->input->post('location'))
            );

     //die(var_dump($data));

    $this->cart->insert($data);
    redirect('cart');
  }

  public function view(){

    $data = array(
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' => $this->app_model->get_all("designers"));

    $this->load->view('cart-view', $data);
  }

  public function update(){
    $i = 1;
    while ($i != 0) {
       if (isset($_POST[$i])){
    $data = array(
               'rowid' => $_POST[$i]['rowid'],
               'qty'   => $_POST[$i]['qty']);

    $this->cart->update($data);
    $i++;
  }else{
    $i = 0;
  }
  }
    redirect('cart');
  }

  public function remove(){
    $this->cart->destroy();
    redirect('cart');
  }

  public function remove_item($rowid){
    $data = array(
               'rowid' => $rowid,
               'qty'   => 0);

    $this->cart->update($data);
    redirect('cart');
  }

  public function checkout(){

    if($this->cart->total_items() == null){
      redirect('auth/signup/');
    }

    if(isset($_POST['stage'])){
      if($_POST['stage'] == 2){
        $data = array('customer' => $this->session->userdata('user'),
                          'date_placed' => get_time(),
                          'payment_hash' => $this->session->userdata('transaction'),
                          'cart'=> json_encode($this->cart->contents()),
                          'shipping_method' => $this->input->post('method')
                          );
            $data = $this->app_model->insert("orders", $data);
            $this->session->unset_userdata('stage');
            $this->session->set_userdata('stage', 3);
            redirect('cart/checkout');
      }elseif($_POST['stage'] == 3){
        switch($_POST['payment_method']){
          case 'paynow':
            $data = array('payment_method' => 'paynow','complete' => no);
            $condition = array('payment_hash'=> $this->session->userdata('transaction'));
            $data = $this->app_model->update("orders", $data, $condition);
            //send an email telling us that someone wants to pay with paynow | sendgrid
            redirect('paynow/createTransaction');
          break;
          case 'cod':
          $data = array('payment_method' => 'cod','complete' => no);
            $condition = array('payment_hash'=> $this->session->userdata('transaction'));
            $data = $this->app_model->update("orders", $data, $condition);
            //send an email telling us that someone wants to pay with COD | sendgrid
            redirect('cod/pay');
          break;
        }
      }
        die(var_dump($this->session->userdata('stage')));
        $this->load->view('check-out-options.php');
    }else{
        $this->signup();
        }
  } 

    public function signup()
   {
    
    if($this->session->userdata('logged_in') ==FALSE)
    {

    $this->form_validation->set_rules('s_name', 'First Name', 'required');
    $this->form_validation->set_rules('s_surname', 'Last Name', 'required');
    $this->form_validation->set_rules('s_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('s_email', 'Email Address', 'required');
    $this->form_validation->set_rules('s_address', 'Shipping Address', 'required');
    $this->form_validation->set_rules('s_password', 'Password', 'required');
     $this->form_validation->set_rules('s_zipcode', 'Zip Code', 'required');
    $this->form_validation->set_rules('s_city', 'City', 'required');
    $this->form_validation->set_rules('s_country', 'Country', 'required');

      if($this->form_validation->run('signup')==FALSE)
      { 
        $this->load->view('check-out-options');
      }
      else
      {

        $condition = array('email'=>strtolower($this->input->post('s_email')));
        $data = $this->app_model->get_all_where("customers", $condition, 1);
        $dat = $data->row();

        if(count($dat) > 0){
          $user =  $dat->fname." ".$dat->sname;
          $data = array('userfound' => $user,
                        'userfound_email' => $dat->email);
          $this->session->set_userdata($data);
          redirect('auth/');
        }
        
        $signup_info = array('fname' => strtolower($this->input->post('s_name')),
                         'sname' => strtolower($this->input->post('s_surname')),
                         'phone' => $this->input->post('s_phone'),
                         'email'=> strtolower($this->input->post('s_email')),
                         'address'=>strtolower($this->input->post('s_address')),
                         'password' => $this->input->post('s_password'),
                         'zip' => $this->input->post('s_zipcode'),
                         'city' => $this->input->post('s_city'),
                         'country' => $this->input->post('s_country'),
                         'date_time' => get_time()
                         );

        if($query = $this->app_model->insert('customers', $signup_info) == TRUE)
        {
          if(isset($_POST['newsletter'])){
              $signup =  array('name' => $this->input->post('s_name')." ".$this->input->post('s_surname'),
                               'email' => $this->input->post('s_email'),
                               'date_of_signup' => get_time());
              $this->app_model->insert('newsletter_subscribers', $signup);
            }

          $this->_start_session($this->input->post('s_email'), "user");
          $this->session->set_userdata('stage', 2);
          $row = $this->app_model->get_all_where("customers", array('email' => $this->session->userdata('user')));
          $data = $row->row_array(0);
          $this->load->view('check-out-options', $data);
        }else{
            die("an error occured you could not signup. Please try again");
        }
      }
  }else{
    $row = $this->app_model->get_all_where("customers", array('email' => $this->session->userdata('user')));
    $data = $row->row_array(0);
    if($this->session->userdata('stage') < 2){
      $this->session->set_userdata('stage', 2);
    }
    
    $this->load->view('check-out-options', $data);
    }

  }

    public function _start_session($email,$usertype)
  {
    $userdata = array(
                   'user'  => $email,
                   'logged_in' => TRUE,
                   'usertype' => $usertype
                      );

    $this->session->set_userdata($userdata);

    //get cookie from facebook with user details
    //$cookie = $this->facebook_model->get_facebook_cookie();
    /*you would have available to you the values in $cookie['uid']
    (the logged in Facebook user's id) and $cookie['access_token']
    (a string you need to access user information from Facebook).
    */
  }

}?>
