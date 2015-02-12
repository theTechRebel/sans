<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Collections extends CI_Controller {

    private function _auth()
  {
    if($this->session->userdata('logged_in')==FALSE || $this->session->userdata('usertype') != 'admin'){
      redirect('auth');
    }
  }

    private function _cache($condition=NULL){
    if(!$condition){
      $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'designers' => $this->app_model->get_all('designers'),
                    'data' => $this->app_model->get_all('collections'));
    }else{
      $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all_where('stocks', $condition, $limit=null, $offset=null));
    }

    return $data;
  }

  public function index(){
      $this->view();
  }

  public function add(){
    $this->_auth();

    $this->form_validation->set_rules('collection_name', 'Collection Name', 'required');

    if($this->form_validation->run() == FALSE){

      $data = $this->_cache();
      unset($data['data']);
      $this->load->view('collections/new', $data);
    }else{

      $table_name = "collections";
      $data = array('collection_name' => $this->input->post('collection_name'));
      $this->app_model->insert($table_name, $data);
      redirect('collections');
    }

  }

   public function delete($id){
    $this->_auth();
    $condition = array('id' => $id);
    $this->app_model->delete('collections', $condition);
    redirect('collections');
  }


  public function view(){
    $this->_auth();
    $data = $this->_cache();
    $this->load->view('collections/view', $data);
  }


}?>
