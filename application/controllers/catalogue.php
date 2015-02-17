<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//production
//define('url','https://sans.co.zw/');

//development
define('url','localhost/sans/');

class Catalogue extends CI_Controller {

	public function index($offset=0){

    //$this->example_spark->printHello();  
    //die();

    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all("stocks", 16, $offset),
                  'rows' => $this->app_model->get_all("stocks"),
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' => $this->app_model->get_all("designers"));


    $config['base_url'] = url.'catalogue/all/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 16;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ="item";


    $this->pagination->initialize($config);

		$this->load->view('catalogue', $data);
	}

  public function all($offset=0){
    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all("stocks", 16, $offset),
                  'rows' => $this->app_model->get_all("stocks"),
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' => $this->app_model->get_all("designers"),
                  'item'=> 3);

    $config['base_url'] = url.'catalogue/all/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 16;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);

    $this->load->view('catalogue', $data);
  }

  public function log_out(){
    $this->session->sess_destroy();
    redirect('auth');
  }

  public function item($offset=0){
    $type = $this->session->userdata('item');
    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all_like("stocks", array('collection'=>$type), 4, $offset),
                  'rows' => $this->app_model->get_all_like("stocks", array('collection'=>$type)),
                  'category' => $type);

    $config['base_url'] = 'http://localhost/sans/catalogue/item/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 4;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);

    $this->load->view('sans/index', $data);

  }

  public function items($offset=0){
    $type = $this->session->userdata('item');
    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all_like("stocks", array('designer'=>$type), 4, $offset),
                  'rows' => $this->app_model->get_all_like("stocks", array('designer'=>$type)),
                  'category' => $type);

    $config['base_url'] = url.'catalogue/items/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 4;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);

    $this->load->view('sans/index', $data);
  }

  public function collection($type=null,$offset=0){
    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all_like("stocks", array('collection'=>$type), 16, $offset),
                  'rows' => $this->app_model->get_all_like("stocks", array('collection'=>$type)),
                  'category' => $type,
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' => $this->app_model->get_all("designers"),
                  'item' => $type);

    //$this->session->set_userdata('item', $type);

    $config['base_url'] = url.'catalogue/item/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 16;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);
    $this->load->view('catalogue', $data);
  }

  public function women($offset=0){
    $this->view(0,$offset);
  }

  public function men($offset=0){
    $this->view(1,$offset);
  }

  

  public function show($type){
    $type = str_replace("%20", " ", $type);
    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all_like("stocks", array('designer'=>$type), 4),
                  'rows' => $this->app_model->get_all_like("stocks", array('designer'=>$type)),
                  'category' => $type);

    $this->session->set_userdata('item', $type);

    $config['base_url'] = url.'catalogue/items/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 4;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);

    $this->load->view('sans/index', $data);
  }


    public function view($id,$offset=0){

      switch ($id) {
        case '0':
          $this->_category($id,$offset);
          break;
        case '1':
          $this->_category($id,$offset);
        break;
          $this->_category($id,$offset);
        case '2':
          $this->_category($id,$offset);
        break;
        default:
          $this->_items($id);
          break;
      }

    }


    private function _items($id){
        $table_name = "stock_images";
        $condition = array('stock_item' => $id);


        $pics = $this->app_model->get_all_where($table_name, $condition, $limit=null, $offset=null);

          $i = 0;
         foreach ($pics->result() as $row) {
              $collpics[$i] = $row->location;
              $i++;
          }

        $item = "pic";
        $table_name = "stocks";
        $condition = array('code' => $id);

        $featured = $this->app_model->get_all_where($table_name,$condition, $limit=null, $offset=null);

        $item = $featured->row();

        $data = array('pics'=>$collpics,
                      'featuredpic'=>$item->pic,
                      'code'=>$id,
                      'price'=>$item->price,
                      'designer'=>$item->designer,
                      'sex'=>$item->sex,
                      'item_name'=>$item->item_name,
                      'description' => $item->description,
                      'collections' => $this->app_model->get_all("collections"),
                      'collection' => $item->collection,
                      'designers' =>$this->app_model->get_all("designers")
                      );
        $this->load->view('item',$data);
    }

    private function _category($id,$offset){
    $data = array('page' => "Home",
                   'items' => $this->app_model->get_all_where("stocks", array('sex'=>$id), 16, $offset),
                  'rows' => $this->app_model->get_all_where("stocks", array('sex'=>$id)),
                  'category' => $id,
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' =>$this->app_model->get_all("designers"),
                  'item'=> $id);

    switch ($id) {
      case '0':
        $config['base_url'] = url.'catalogue/women/';
        break;

      case '1':
        $config['base_url'] = url.'catalogue/men/';
        break;
    }

    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 16;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);

    $this->load->view('catalogue', $data);
    }

    //designers controller - front end
    public function designers($surname=""){
    //redirect('designers');
    if($surname != ""){
      $designer = $this->app_model->get_all_where('designers',array('surname'=>$surname));
      $data = array('designer' => $designer->row(),
                    'collections' => $this->app_model->get_all("collections"),
                    'designers' =>$this->app_model->get_all("designers")
                    );
      $this->load->view('designer',$data);
    }else{
      $data = array(
                    'collections' => $this->app_model->get_all("collections"),
                    'designers' =>$this->app_model->get_all("designers")
                    );

      $this->load->view('designers', $data);
    }
  }

     public function designer($collections="",$offset=0){

    $data = array('page' => "Home",
                  'items' => $this->app_model->get_all_like("stocks", array('designer'=>$collections), 16, $offset),
                  'rows' => $this->app_model->get_all_like("stocks", array('designer'=>$collections)),
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' =>$this->app_model->get_all("designers"),
                  'item' => $collections);

    $config['base_url'] = 'http://localhost/sans/catalogue/designer/'.$collections.'/';
    $config['total_rows'] = $data['rows']->num_rows();
    $config['per_page'] = 16;
    $config['num_links'] = $data['rows']->num_rows();
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    //$config['anchor_class'] ='pagination';

    $this->pagination->initialize($config);

    $this->load->view('catalogue', $data);
  }

  public function signmeup(){
    if(isset($_POST['newsletter'])){
              $signup =  array(
                               'email' => $_POST['newsletter'],
                               'date_of_signup' => get_time());
              $this->app_model->insert('newsletter_subscribers', $signup);
            }
    $this->session->set_userdata('newsletter',"Thank you for signing up for our Newsletter. We appreciate your interest in our service.");
    redirect('catalogue');
  }

  public function search(){
    $search = $_GET['search'];
    $data = explode(" ", $search);

    var_dump($data);

    for ($i=0; $i < count($data); $i++) { 
      $condition = array('item_name' => $data[$i]);
      $items[$i] = $this->app_model->get_all_like("stocks", $condition);
    }
     $data = array(
                  'items' => $items,
                  'collections' => $this->app_model->get_all("collections"),
                  'designers' => $this->app_model->get_all("designers"),
                  'item'=> $_GET['search']);

      $this->load->view('catalogue-search',$data);
    

  }



}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
