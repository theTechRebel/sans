<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cod extends CI_Controller {

  public function pay(){
    $data = $this->app_model->get_all_where("orders", array('payment_hash' =>$this->session->userdata('transaction')), 1);
    $order = $data->row();
    $customer = $this->app_model->get_all_where("customers", array('email' =>$order->customer), 1);
    $this->load->view('cod-pay', $customer->row());
  }

public function method(){

//notify SANS Exposure Staff
    $message = $_POST['name']." wants to buy using Cash On Delivery <br/>";
    $message = $message . "Preffered mode of communication to complete transaction is ". $_POST['method']."<br/>";
    $message = $message . "Items selected: ". $_POST['items']." worth ".$_POST['ammount']. "<br/>";
    $message = $message . "Contact Details: Phone:".$_POST['phone']. " Email:".$_POST['email']."<br/>";
    $useremail = $_POST['email'];

$list = array('steve@sans.co.zw', 'samantha@sans.co.zw', 'simukai@sans.co.zw');

$sendGrid = new Email_Assistant();

$sendGrid->send_email('sales@sans.co.zw', 
                   'Sans Exposure Sales Team', 
                   $list, 
                   'Cash On Delivery Notification', 
                   $message);

//notify the customer
    $message = "<img src='http://sans.co.zw/uiux/img/logo.png' alt='SANS Exposure Logo'/><br/>
                Dear ".$_POST['name']." <br/>
                Thank you for choosing to purchase using Cash on Delivery from SANS Exosure.
                At SANS Exposure we are always looking to improve our business, customer relations and 
                your overal online shopping experience. We hope that you found it simple & fun shopping
                online with us.<br/>
                
                We would appreciate it a great deal if you took just a few seconds to rate your online shopping 
                experience with us, by replying to this email with a simple 'Awesome :)' or 'Terrible :('.

                Thank you for shopping with us.<br/>
                We value your continued support.<br/>
                https://www.sans.co.zw/";

$sendGrid->send_email('sales@sans.co.zw', 
                   'Sans Exposure Sales Team', 
                   $_POST['email'], 
                   'Cash On Delivery Purchase', 
                   $message);
    
    $this->session->set_userdata('stage',4);
    $this->session->set_userdata('cod_msg',"We are processing your order and we will get back to you directly in a flash. Thank you for shopping with SANS Exposure, we appreciate your continued support.");

    $this->cart->destroy();
    $this->session->unset_userdata('transaction');
    $this->load->view('check-out-options');
  }
}?>
