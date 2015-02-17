<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function index()
  {
    if($this->session->userdata('logged_in')==FALSE)
    {
      $this->form_validation->set_rules('email', 'Email Address', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');


      if($this->form_validation->run('login') == FALSE)
      {
         $data['page'] = 'Login';
         $this->load->view('auth-login', $data);
      }
      else
      {
        $row1 = $this->app_model->get_all_where("users", array('email' => $this->input->post('email'),
                                                        'password' => $this->input->post('password'))
                                              );

        $row2 = $this->app_model->get_all_where("customers", array('email' => $this->input->post('email'),
                                                        'password' => $this->input->post('password'))
                                              );
        $data1 = $row1->row_array(0);
        $data2 = $row2->row_array(0);

        if(count($data1) < 1 && count($data2) < 1)
        {
          $data = array('page' => 'Login',
                         'no_user' => 'Your username and password combination is incorrect'
                        );
          $this->load->view('auth-login', $data);

        }else{

          if(count($data1) > 1){
              $data = $data1;
          }elseif(count($data2) > 1){
              $data = $data2;
          }


          switch ($data["usertype"]) {
            case 'admin':
              $this->_start_session($data["phone"],$data['usertype']);
                redirect('dashboard');
              break;

            case 'designer':
              # code...
              break;

              case 'sales':
                # code...
                break;

              case 'customer':
              $this->_start_session($data["email"],$data['usertype']);
                redirect('customers');
              break;

            default:
              # code...
              break;
          }

        }
      }
    }
      else
      {
        redirect('dashboard');
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
        $data['page'] = 'Sign Up';
        $this->load->view('auth-signup', $data);
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
          redirect('dashboard/');
        }else{
            die("an error occured you could not signup. Please try again");
        }
      }
  }
    else
    {
    redirect('dashboard');
    }

  }


    public function log_out(){
    $this->session->sess_destroy();
    redirect('auth');
  }



  public function recover(){
   if($this->session->userdata('logged_in')==FALSE)
    {
      $this->form_validation->set_rules('email', 'Email Address', 'required');
      if($this->form_validation->run('login') == FALSE)
      {
         $data['page'] = 'Login';
         $this->load->view('auth-recover', $data);
      }else{
        $data = $this->app_model->get_all_where("customers", array('email'=>$_POST['email']), 1);
        $email = $data->row();
        //die(var_dump($email));
        $this->recoverPassword($email->password,$email->fname." ".$email->sname,$email->email);

        $this->session->set_userdata('userfound_email',$email->email);
        $this->session->set_userdata('email_sent',"TRUE");
        $this->load->view('auth-recover');
      }
  }else{
    redirect("customers");
  }
}

private function recoverPassword($pwd,$customer,$email){

    
    /*
    //using default email account
    $config = Array(
      //'protocol' => 'smtp',
      'smtp_host' => 'smtp.zoho.com',
      'smtp_port' => 587,
      'smtp_user' => 'sales@sans.co.zw', // change it to yours
      'smtp_pass' => 'sales@sans', // change it to yours
      'mailtype' => 'html',
     //'starttls'  => true,
  );
  */


    $message = "
                Dear ".$customer." <br/>
                You have requested to recover the password for your SANS Exposure Account.<br/>
                ==========================================================================<br/>
                We hope you keep this password safe, although you can recover it anytime
                from our login area.

                Your Password is: <br/>
                <h1>".$pwd."</h1><br/>

                Thank you for visiting our website.
                We value your continued support.
                https://www.sans.co.zw/";

    //using sendgrid
    $result = $this->sendgrid_mail->send(
                                          $email, 
                                          'Password Recovery', 
                                          $message, 
                                          NULL, 
                                          'support@sans.co.zw'
                                          );

    //$result->error_message();
    die(var_dump($result));

    /*
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('support@sans.co.zw, SANS Exposure Support Team'); // change it to yours
    $this->email->to($email);// change it to yours
    $this->email->to("steve@sans.co.zw");
    $this->email->subject('Password Recovery');
    //$this->email->set_header();
    $this->email->message($message);
    $this->email->send();
    */
  }

}

?>
