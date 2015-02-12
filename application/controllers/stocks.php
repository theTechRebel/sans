<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stocks extends CI_Controller {

  //add stocks
  //update stocks
  //view stocks
  //delete stocks

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
                    'collections' => $this->app_model->get_all('collections'),
                    'data' => $this->app_model->get_all('stocks'));
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

  public function add($id=NULL){
    $this->_auth();
    if($id){

        $this->form_validation->set_rules('code', 'Item Code', 'required');

        if ($this->form_validation->run() == FALSE)
      {
        $data = $this->_cache();
        unset($data['data']);
        $data['code'] = $id;

        $this->load->view('stocks/associate', $data);
      }else{

        $condition = array('code'=> $id);
        $item = "designer";
        $data = $this->app_model->get_this($item,"stocks",$condition);

        $designer = $data->row();

        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $config['remove_spaces'] = TRUE;
        $config['upload_path'] = './client_side/sans/images/stocks/designers/'.$designer->designer."/";

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
          }else{
          $data = array('upload_data' => $this->upload->data());

          $data = array('code' => $id,
                      'pic' => $config['upload_path'].str_replace(" ","_",$_FILES['userfile']['name']));
        $this->app_model->insert('collections', $data);
        redirect('stocks/add/'.$id);
        }
      }

    }else{

    $data = $this->_cache();
    unset($data['data']);

    //$this->form_validation->set_rules('userfile', 'Item Pic', 'required');
    $this->form_validation->set_rules('code', 'Item Code', 'required');
    $this->form_validation->set_rules('collection', 'Collection', 'required');
    $this->form_validation->set_rules('price', 'Item Price', 'required');
    $this->form_validation->set_rules('size', 'Item Size', 'required');
    $this->form_validation->set_rules('quantity', 'Item Quantity', 'required');
    $this->form_validation->set_rules('designer', 'Item Designer', 'required');
    $this->form_validation->set_rules('sex', 'Item Sex', 'required');
    $this->form_validation->set_rules('item_name', 'Item Name', 'required');

    if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('stocks/update', $data);
      }else{

        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $config['remove_spaces'] = TRUE;
        $config['upload_path'] = './client_side/sans/images/stocks/designers/'.$this->input->post('designer')."/".$this->input->post('collection')."/".$this->input->post('code')."/";

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
          }else{
          $data = array('upload_data' => $this->upload->data());

          $data = array('code' => $this->input->post('code'),
                      'price' => $this->input->post('price'),
                      'size' => $this->input->post('size'),
                      'quantity' => $this->input->post('quantity'),
                      'sex' => $this->input->post('sex'),
                      'collection' => $this->input->post('collection'),
                      'description' => $this->input->post('description'),
                      'item_name' => $this->input->post('item_name'),
                      'pic' => $config['upload_path'].str_replace(" ","_",$_FILES['userfile']['name']),
                      'designer' => $this->input->post('designer'));
        $this->app_model->insert('stocks', $data);


        $fileName = 'userfile';
        $i = 1;

        while ($i != 0) {
           if (isset($_FILES[$fileName.$i])){
              //var_dump($_FILES[$fileName.$i]);

            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width']  = '5000';
            $config['max_height']  = '5000';
            $config['remove_spaces'] = TRUE;
            $config['upload_path'] = './client_side/sans/images/stocks/designers/'.$this->input->post('designer')."/".$this->input->post('collection')."/".$this->input->post('code')."/";

            //call initialise for file upload bug fix
            $this->upload->initialize($config);

            $this->upload->do_upload($fileName.$i);

            $table_name = "stock_images";
            $data = array('location' => $config['upload_path'].str_replace(" ","_",$_FILES[$fileName.$i]['name']),
                          'designer' => $this->input->post('designer'),
                          'stock_item' => $this->input->post('code'));

            $this->app_model->insert($table_name, $data);

            $i++;

          }else{
            $i =0;
          }
        }

        redirect('stocks');
        }
      }
      }
  }

  public function update($id=NULL){
      $this->_auth();
      $condition = array('code' => $id);
      $data = $this->_cache($condition);

   $this->form_validation->set_rules('price', 'Item Price', 'required');
    $this->form_validation->set_rules('size', 'Item Size', 'required');
    $this->form_validation->set_rules('quantity', 'Item Quantity', 'required');
    $this->form_validation->set_rules('item_name', 'Item Name', 'required');

      if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('stocks/update',$data);
      }
      else
      {

        $data = array('price' => $this->input->post('price'),
                      'size' => $this->input->post('size'),
                      'quantity' => $this->input->post('quantity'),
                      'item_name' => $this->input->post('item_name'),
                      'sex' => $this->input->post('sex'));
        $condition = array('code' => $this->input->post('code'));
        $this->app_model->update('stocks', $data, $condition);

        redirect('stocks');
      }
  }

  public function view(){
    $this->_auth();
    $data = $this->_cache();
    $this->load->view('stocks/view', $data);
  }

  public function delete($id){
    $this->_auth();
    $condition = array('code' => $id);
    $this->app_model->delete('stocks', $condition);
    redirect('stocks');
  }

}
