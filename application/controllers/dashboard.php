<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
  {
    if($this->session->userdata('logged_in')==FALSE || $this->session->userdata('usertype') == 'customer'){
      redirect('customers');
    }else{
    $data = array('page' => 'Mission Control', 'user' => $this->session->userdata('user'), 'usertype' =>$this->session->userdata('usertype'));
    $this->load->view('dashboard/index', $data);
    }
  }

private function _prepare_data($type, $code=NULL, $surname=NULL){
  if($code == NULL && $surname == NULL){
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all($type));
  return $data;
}elseif ($code != NULL && $surname == NULL){
  $condition  = array('code' => $code);
  $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all_where($type, $condition, $limit=null, $offset=null));
  return $data;
}elseif ($surname != NULL) {
  $condition  = array('surname' => $surname);
  $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all_where($type, $condition, $limit=null, $offset=null));
  return $data;
}

}

private function _insert_data($type, $code=NULL, $surname=NULL){
  if($code == NULL && $surname == NULL){
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all($type));
  return $data;
}elseif ($code != NULL && $surname == NULL){
  $condition  = array('code' => $code);
  $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all_where($type, $condition, $limit=null, $offset=null));
  return $data;
}elseif ($surname != NULL) {
  $data = array('surname' => $this->input->post('surname'),
                'label' => $this->input->post('label'),
                'full_name' =>$this->input->post('full_name'));
  return $this->app_model->insert($type, $data);
}
}

private function _update_data($type, $code=NULL, $surname=NULL){
  if($code == NULL && $surname == NULL){
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all($type));
  return $data;
}elseif ($code != NULL && $surname == NULL){
  $condition  = array('code' => $code);
  $data = array('price' => $this->input->post('price'),
                'size' => $this->input->post('size'),
                'quantity' => $this->input->post('quantity'));
  return $this->app_model->update($type, $data, $condition);

}elseif ($surname != NULL) {
  $condition = array('surname' => $surname);
  $data = array('label' => $this->input->post('label'),
                'full_name' =>$this->input->post('full_name'));
  return $this->app_model->update($type, $data, $condition);
}
}


public function view($type){
  $data = $this->_prepare_data($type);
  switch ($type){
    case 'orders':
      $this->load->view('dashboard/orders', $data);
      break;

    case 'stocks':
      $this->load->view('dashboard/stocks', $data);
    break;

    case 'collections':
      $this->load->view('dashboard/collections', $data);
    break;

    case 'designers':
      $this->load->view('dashboard/designers', $data);
    break;
    }
}

public function insert($type,$code=NULL,$old_or_new=NULL){

  switch($type){

    case 'orders':
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'));
    break;

    case 'stocks':
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'designers' => $this->app_model->get_all("designers"));
      $this->load->view('dashboard/stocks_add', $data);
    break;

    case 'collections':
    if($old_or_new == "new"){
      $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'items' => $this->app_model->get_all_where("stocks", array('designer' => $code), $limit=null, $offset=null),
                    'designer' => $code);
    $this->load->view('dashboard/collections_add', $data);
    }else{
      $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'items' => $this->app_model->get_all_where("stocks", array('designer' => $code), $limit=null, $offset=null),
                    'collections' => $this->app_model->get_all_where("collections", array('designer' => $code), NULL, NULL),
                    'designer' => $code);
    $this->load->view('dashboard/collections_add', $data);
    }

    break;

    case 'designers':
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'));
      $this->load->view('dashboard/designers_add', $data);
    break;
  }
}


public function read($type,$code){

  switch ($type) {
  case 'orders':
  $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all($type),
                    'designers' => $this->app_model->get_all("designers"));
    $this->load->view('dashboard/orders_read', $data);
    break;

  case 'stocks':
    $data = $this->_prepare_data($type,$code);
    $this->load->view('dashboard/stocks_add', $data);

  break;

  case 'catalogue':
    $data = $this->_prepare_data($type,$code);
  break;

  case 'designers':
    $data = $this->_prepare_data($type,NULL,$code);
    $this->load->view('dashboard/designers_add', $data);
  break;
  }

}

public function update($type){

  switch ($type) {
  case 'orders':
    $data = $this->_prepare_data($type,$code);
    $this->load->view('dashboard/orders_add', $data);
    break;

  case 'stocks':
    $result = $this->_update_data($type,$this->input->post('code'),NULL);
    redirect('dashboard/view/stocks');
  break;

  case 'catalogue':

  break;

  case 'designers':
    $result = $this->_update_data($type,NULL,$this->input->post('surname'));
    redirect('dashboard/view/designers');
  break;
  }

}

public function delete($type, $code){
  $data = $this->_prepare_data($type);
    switch ($type) {
    case 'orders':
      $this->load->view('dashboard/');
      break;

    case 'stocks':
      $data = array('code' => $code);
      $this->app_model->delete($type, $data);
      redirect('dashboard/view/stocks');
    break;

    case 'catalogue':

    break;

    case 'designers':
      $data = array('surname' => $code);
      $this->app_model->delete($type, $data);
      redirect('dashboard/view/designers');
    break;

  }

}

public function save($type){

  switch ($type) {
    case 'orders':

    $this->form_validation->set_rules('code', 'Code', 'required');
    $this->form_validation->set_rules('price', 'Price', 'required');
    $this->form_validation->set_rules('size', 'Size', 'required');
    $this->form_validation->set_rules('quantity', 'Quantity', 'required');

    $data = $this->_prepare_data($type,$this->input->post('code'));
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('dashboard/orders_add',$data);
    }
    else
    {
        $data = array('code' => $this->input->post('code'),
                      'price' => $this->input->post('price'),
                      'size' => $this->input->post('size'),
                      'quantity' => $this->input->post('quantity')
                      //'pic' => img location
                      );
        $result = $this->app_model->insert($type, $data);

        var_dump($result);
        die();
    }

      break;

    case 'stocks':


    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '10000';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    $config['remove_spaces'] = TRUE;
    $config['upload_path'] = './client_side/img/catalogues/designers/'.$this->input->post('designer')."/";

    //call initialise for file upload bug fix
    $this->upload->initialize($config);

    if(!is_dir($config['upload_path'])){
      mkdir($config['upload_path'], 0777, true);
    }

   //echo $config['upload_path'];
    //die();

    //$field_name = "pic";
    //$this->upload->do_upload("pic");

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

      //var_dump(is_dir('./client_side/img/catalogues/uploads/'));
      //echo "<br/>";
      var_dump($error);
      die();

      $this->load->view('dashboard/stocks_add', $error);
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());

      $this->form_validation->set_rules('code', 'Code', 'required');
      $this->form_validation->set_rules('price', 'Price', 'required');
      $this->form_validation->set_rules('size', 'Size', 'required');
      $this->form_validation->set_rules('quantity', 'Quantity', 'required');

    $data = $this->_prepare_data($type,$this->input->post('code'));
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('dashboard/stocks_add',$data);
    }
    else
    {
        $data = array('code' => $this->input->post('code'),
                      'price' => $this->input->post('price'),
                      'size' => $this->input->post('size'),
                      'quantity' => $this->input->post('quantity'),
                      'pic' => $config['upload_path'].str_replace(" ","_",$_FILES['userfile']['name']),
                      'designer' => $this->input->post('designer'));
        $result = $this->app_model->insert($type, $data);
        redirect('dashboard/view/stocks');
    }
  }

    break;

    case 'collections':
    //var_dump($_POST);
    //die();

    $this->form_validation->set_rules('collection_name','The Collection Name','required');

    if($this->form_validation->run() == FALSE){
      $this->load->view('dashboard/collecions_add', $data);
    }else{
      $this->app_model->insert($type,array('collection_name' => $this->input->post('collection_name'),
                                           'code' => $this->input->post('code'),
                                           'designer' => $this->input->post('designer')));
      redirect('dashboard/view/collections/');
    }

    break;

    case 'designers':
    $this->form_validation->set_rules('surname', 'Surname', 'required');
    $this->form_validation->set_rules('label', 'Label', 'required');
    $this->form_validation->set_rules('full_name', 'Full Name', 'required');


    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('dashboard/orders_add',$data);
    }else{
      $this->_insert_data($type,NULL,$this->input->post('surname'));
      redirect('dashboard/view/designers');
    }

    break;

}

}



  public function select_designer(){
    $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'designers' => $this->app_model->get_all('designers'));
    $this->load->view('dashboard/select_designer', $data);
  }

  public function set_collection_image(){

    $this->form_validation->set_rules('collection_name', 'Collection Name', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'collections' => $this->app_model->get_all('collections'));
      $this->load->view('dashboard/set_collection',$data);
    }else{
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '10000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      $config['remove_spaces'] = TRUE;
      $config['upload_path'] = './client_side/img/catalogues/collections/'.$this->input->post('collection_name')."/";

    //call initialise for file upload bug fix
    $this->upload->initialize($config);

    if(!is_dir($config['upload_path'])){
      mkdir($config['upload_path'], 0777, true);
    }

      if (!$this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

      //var_dump(is_dir('./client_side/img/catalogues/uploads/'));
      //echo "<br/>";
      var_dump($error);
      die();
    }
    else
    {
      //echo "success";
      //die();

      $data = array('collection_name' => $this->input->post('collection_name'),
                    'image_location' => $config['upload_path'].str_replace(" ","_",$_FILES['userfile']['name']),
                    'designer' => "",
                    'sex' => $this->input->post('sex'));

      $this->app_model->insert("collection_image",$data);
      redirect('dashboard/view/collections');
    }
}
}
}
