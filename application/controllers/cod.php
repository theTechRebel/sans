<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cod extends CI_Controller {

  public function pay(){
  	$data = $this->app_model->get_all_where("orders", array('payment_hash' =>$this->session->userdata('transaction')), 1);
  	$order = $data->row();
  	$customer = $this->app_model->get_all_where("customers", array('email' =>$order->customer), 1);
  	$this->load->view('cod-pay', $customer->row());
  }

  public function method(){
  	//var_dump($_POST);
  	
  	$message = $_POST['name']." wants to buy using Cash On Delivery <br/>";
  	$message = $message . "Preffered mode of communication to complete transaction is ". $_POST['method']."<br/>";
  	$message = $message . "Items selected: ". $_POST['items']." worth ".$_POST['ammount']. "<br/>";
  	$message = $message . "Contact Details: Phone:".$_POST['phone']. " Email:".$_POST['email']."<br/>";
  	$useremail = $_POST['email'];

  	//send email notifying what the customer wants to buy and the method and their details | sendgrid
  	
  	$this->session->set_userdata('stage',4);
  	$this->session->set_userdata('cod_msg',"We are processing your order and we will get back to you directly in a flash. Thank you for shopping with SANS Exposure, we appreciate your continued support.");
  	$this->load->view('check-out-options');
  }
}?>
