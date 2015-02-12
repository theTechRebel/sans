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

}?>
