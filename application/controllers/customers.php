<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

  private function _auth()
  {
    if($this->session->userdata('logged_in')==FALSE || $this->session->userdata('usertype') != 'customer'){
      redirect('auth');
    }
  }

  private function _cache(){
      $this->session->userdata('user');

      $table_name = "customers";
      $condition = array('email' => $this->session->userdata('user'));
      $limit = 1;
      $offset = null;

      $data = $this->app_model->get_all_where($table_name, $condition, $limit, $offset);

      //die(var_dump($data->row()));

      $dat = array();
      foreach ($data->row() as $key => $value) {
        $dat[$key] = $value;
      }

      return $dat;
  }



  public function index()
  {
    $this->view();
  }


  public function view(){
    $this->_auth();
    $data1 = $this->_cache();


    $data2 = array(
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' => $this->app_model->get_all("designers"),
                  );

    $data = array_merge($data1,$data2);

    $this->load->view('customers-view', $data);
  }


}
