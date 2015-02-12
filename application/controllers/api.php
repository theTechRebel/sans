<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {


  public function json(){
    $items = $this->app_model->get_all("stocks", null, null);

      $i = 0;
     foreach ($items->result() as $row) {
      //turn array into object - quick hack
      $object[$i] = json_decode(json_encode($response = array(
                        'price' => $row->price,
                        'item_name' => $row->item_name,
                        'code' => $row->code,
                        'pic' => $row->pic,
                        'designer' => $row->designer,
                        'size' => $row->size,
                        'quantity' => $row->quantity,
                        'sex' => $row->sex
                      )));
      $i++;
      }
    echo json_encode($object);
    return;//needs to be added if json is to be parsed by $.ajax()
  }



  public function ajaxRequest($offset=0,$id=null){

    if(!isset($id)){
    $items = $this->app_model->get_all("stocks", 4, $offset);
    }else{
      switch ($id) {
        case '1':
          $items = $this->app_model->get_all_where("stocks", array('sex'=>$id), 4, $offset);
        break;
        case '0':
          $items = $this->app_model->get_all_where("stocks", array('sex'=>$id), 4, $offset);
        break;
        case '2':
          $items = $this->app_model->get_all_where("stocks", array('sex'=>$id), 4, $offset);
        break;
        default:
           $id = str_replace("%20", "", $id);
          $items = $this->app_model->get_all_where("stocks", array('collection'=>$id), 4, $offset);
          if($items->num_rows() == 0){
          $items = $this->app_model->get_all_where("stocks", array('designer'=>$id), 4, $offset);
          }
          break;
      }

    }

      $i = 0;
     foreach ($items->result() as $row) {
      //turn array into object - quick hack
      $object[$i] = json_decode(json_encode($response = array(

                        'price' => $row->price,
                        'item_name' => $row->item_name,
                        'collection' => $row->collection,
                        'code' => $row->code,
                        'pic' => $row->pic,
                        'designer' => $row->designer,
                        'size' => $row->size,
                        'quantity' => $row->quantity,
                        'sex' => $row->sex
                      )));
      $i++;
      }
    echo json_encode($object);
    return;//needs to be added if json is to be parsed by $.ajax()
  }


}
?>
