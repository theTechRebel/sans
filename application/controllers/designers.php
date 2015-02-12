  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Designers extends CI_Controller {

  //add designers
  //update designers
  //view designers
  //delete designers

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
                    'data' => $this->app_model->get_all('designers'));
    }else{
      $data = array('page' => 'Mission Control',
                    'user' => $this->session->userdata('user'),
                    'usertype' =>$this->session->userdata('usertype'),
                    'data' => $this->app_model->get_all_where('designers', $condition, $limit=null, $offset=null));
    }

    return $data;
  }

  public function index(){
      $this->view();
  }

  public function add(){
    $this->_auth();
    $data = $this->_cache();
    unset($data['data']);

     $this->form_validation->set_rules('label', 'Designer Label', 'required');
    $this->form_validation->set_rules('full_name', 'Designer Full Name', 'required');
    $this->form_validation->set_rules('surname', 'Designer Surname', 'required');
    if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('designers/update', $data);
      }else{
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $config['remove_spaces'] = TRUE;
        $config['upload_path'] = './client_side/sans/images/stocks/designers/'.$this->input->post('surname').'/';

        //call initialise for file upload bug fix
        $this->upload->initialize($config);

        if(!is_dir($config['upload_path'])){
          mkdir($config['upload_path'], 0777, true);
        }

        if (!$this->upload->do_upload()){
          die("upload failed please retry");
        }
        $data = array('label' => $this->input->post('label'),
                       'surname'=> $this->input->post('surname'),
                       'full_name'=> $this->input->post('full_name'),
                       'pic'=>$config['upload_path'].str_replace(" ","_",$_FILES['userfile']['name']));

        $this->app_model->insert('designers', $data);
        redirect('designers');
      }
  }

  public function update($id=NULL){
      $this->_auth();
      $condition = array('surname' => $id);
      $data = $this->_cache($condition);


    $this->form_validation->set_rules('label', 'Designer Label', 'required');
    $this->form_validation->set_rules('full_name', 'Designer Full Name', 'required');

      if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('designers/update',$data);
      }
      else
      {
        $data = array('label' => $this->input->post('label'),
                       'full_name'=> $this->input->post('full_name'));
        $condition = array('surname' => $this->input->post('surname'));
        $this->app_model->update('designers', $data, $condition);
        redirect('designers');
      }
  }

  public function view($condition=null){
    if($this->session->userdata('logged_in')==FALSE || $this->session->userdata('usertype') != 'admin'){
      $data = $this->_cache();
      unset($data['page']);
      unset($data['user']);
      unset($data['usertype']);
      $this->load->view('designers/all', $data);
    }else{
      if($condition != null){
        $data = $this->_cache(array('label' => $condition));
      }else{
        $data = $this->_cache();
      }
      $this->load->view('designers/view', $data);
    }

  }

  public function delete($id){
    $this->_auth();
    $condition = array('surname' => $id);
    $this->app_model->delete('designers', $condition);
    redirect('designers');
  }

}
