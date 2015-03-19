<?PHP

class Email_Assistant{

function __construct(){$this->ci =& get_instance();}

function send_email($from, $mailName, $email, $subject, $message){

	$url = "https://api.sendgrid.com/api/mail.send.json";

		if(is_array($email)){

			foreach ($email as $key => $value) {
						$data = array('api_user'=> 'thetechrebel',
			             'api_key'		=> 'iamtheblaze93',
			             'to[]'	    => $value,
			             'subject'		=>	$subject,
			             'html'		   => $message,
			             'from'     => $from,
			             'fromname' => $mailName);
							$ch = curl_init($url);
		 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		 
		$response = curl_exec($ch);
		curl_close($ch);
		}
	}else{
		$data = array('api_user' => 'thetechrebel',
			             'api_key'		=> 'iamtheblaze93',
			             'to'		     => $email,
			             'subject'		=>	$subject,
			             'html'		   => $message,
			             'from'     => $from,
			             'fromname' => $mailName);
			$ch = curl_init($url);
		 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		 
		$response = curl_exec($ch);
		curl_close($ch);
}

	//old way using SMTP 
/*
	$this->ci->email->from($from, $mailName);
	$this->ci->email->to($email);

	$this->ci->email->subject($subject);
	$this->ci->email->message($message);

	$this->ci->email->send();
	*/
}
}

/* End of file Email_Assistant.php */
/* Location: ./application/libraries/Email_Assistant.php */