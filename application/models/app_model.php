<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function get_all($table_name, $limit=NULL, $offset=NULL)
    {
       $this->db->order_by("id", "desc");
      return $this->db->get("$table_name",$limit,$offset);

    }


    public function get_all_where($table_name, $condition, $limit=null, $offset=null)
    {
        $this->db->order_by("id", "desc");
      return $this->db->get_where("$table_name", $condition, $limit, $offset);
    }

    public function get_all_like($table_name,$like_condition,$limit=null, $offset=null){
        $this->db->like($like_condition);
        $this->db->order_by("id", "desc");
        return $this->db->get("$table_name",$limit,$offset);
    }

    public function insert($table_name, $data)
    {
    	return $this->db->insert("$table_name", $data);
    }

    public function update($table_name, $data, $condition)
    {
        return $this->db->update("$table_name", $data, $condition);
    }

    public function delete($table_name, $data)
    {
        return $this->db->delete("$table_name", $data);
    }

    public function get_this($item,$table_name,$condition){
        $this->db->select($item);
        $this->db->where($condition);
        return $this->db->get("$table_name");
    }
}
