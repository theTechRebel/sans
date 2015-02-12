<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comingsoon extends CI_Controller {

  public function index()
  {
    $data = array('page' => "Coming Soon");
    $this->load->view('comingsoon/index', $data);
  }
}
