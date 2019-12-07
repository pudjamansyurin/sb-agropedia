<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// load the model
		$this->load->model('User_model');
		$this->load->model('App_model');
		// detect device
		$this->mobile = $this->agent->is_mobile();
		// common configuration
		$this->form_validation->set_error_delimiters('', '<br/>');
		// get global configuration
		$sistem_config = $this->App_model->getSistemConfig();
		foreach($sistem_config as $value)
			$this->sistem->{$value->sistem_config} = $value->value;
	}	
	public function index(){
		$this->load->view('login', $data);
	}
	public function pg($file){
		$this->load->view($file);
	}
	public function login(){
		$data['WARNING'] = $this->sistem->unsupported_device_message;
		$this->form_validation->set_rules('username', 'USERNAME', 'trim|required|htmlspecialchars');
		$this->form_validation->set_rules('password', 'PASSWORD', 'trim|required|htmlspecialchars');
		if ($this->form_validation->run() == FALSE){
			$data['i'] = validation_errors();
		} else {
			$user = $this->User_model->getUser($_POST['username']);
			if(!$user || $user->password !== $_POST['password'])
				$data['i'] = 'Username atau password salah.<br/>';
		}
		if(!$data['i']){
			// set session
			$this->session->set_userdata('id_user', $user->id_user);
			// set last login
			if($user->last_login != "0000-00-00 00:00:00")
				set_cookie('last_login', $user->last_login, $this->sistem->cookie_time); 
			$this->User_model->setLastLogin($user->id_user);
			// set cookie
			if($_POST['ingat'] == 'iya'){
				set_cookie('username', $user->username, $this->sistem->cookie_time); 
				set_cookie('password', $user->password, $this->sistem->cookie_time); 
				set_cookie('ingat', 'checked', $this->sistem->cookie_time);  
				// if session expired
				set_cookie('session', true, $this->sistem->cookie_time); 
			} else {
				delete_cookie('username');
				delete_cookie('password');
				delete_cookie('ingat');
			}
			// session for autologout
			set_cookie('logged_in', TRUE, $this->sistem->cookie_time); 
			// if ever login, so user already read the update webview reminder
			if($this->mobile)
				set_cookie('webview_update', TRUE, $this->sistem->webview_update_reminder);
		} 
		o( json_encode($data) );
	}
	public function logout(){
		delete_cookie('logged_in');
		if( $this->session->userdata() ){		
			$this->session->sess_destroy();
			redirect('user/index/logout');
		} else 
			redirect('user/index/timeout');
	}
	public function secure(){
		if($this->session->userdata)		
			$this->session->sess_destroy();
		delete_cookie('logged_in');
		$this->load->view('secure');
	}
	public function lupa(){
		$data['WARNING'] = $this->sistem->unsupported_device_message;
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email|htmlspecialchars', 
																			array('required' => "<b>%s</b> kosong.",
																						'valid_email' => "<b>%s</b> tidak valid.") );
		if($this->form_validation->run() == FALSE)
			$data['i'] = validation_errors();
		if(!$data['i'])
			if(!$this->User_model->isEmailRegistered($_POST['email']))
				$data['i'] = '<b>Email</b> tidak dipakai';
		if(!$data['i']){
			$user = $this->User_model->getUserByEmail($_POST['email']);
			// email data
			$to 		= $_POST['email'];
			$subj 	= "Lupa Password | {$this->sistem->app_title} {$this->sistem->daerah}";
			$mesg		= $this->generate_content_lupa($user);
			if($error = $this->send_mail($to, $subj, $mesg))
				$data['i'] = $error;
		}
		o( json_encode($data) );    	
	}
	private function generate_content_lupa($db){
		unset($db->role);
		$row = NULL;
		foreach ($db as $key => $value) {
			if(!(strpos($key, "id_") !== false)){
				$key = strtoupper(str_replace('_', ' ', $key));
				$value = b2m($value);
				$row .= "<tr><td><strong>{$key}<strong>:</td><td>{$value}</td></tr>";
			}
		}
		$message = "
		<html><body>
		<div style='widht:100%; border:1px solid blue;'>
			<div style='width:100%; text-align:center; background-color:blue; color: white; margin: 0; padding:5px 0'>
				<p style='font-size:25px; margin:0'>FITUR LUPA PASSWORD</p>
				<p style='font-size:15px; margin:0'>Profil Anda</p>
			</div>
			<table rules='all' style='width:100%'' cellpadding='10'>{$row}</table>
		</div>
		</body></html>
		";
		return $message;
	}
	public function send_mail($to, $subject, $message) {
		$this->load->library("PHP_Mailer");
		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Ask for HTML-friendly debug output
		//$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = $this->sistem->mailer_host;
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = $this->sistem->mailer_username;
		//Password to use for SMTP authentication
		$mail->Password = $this->sistem->mailer_password;
		//Set who the message is to be sent from
		$mail->setFrom($this->sistem->mailer_username, $this->sistem->mailer_sender);
		//Set an alternative reply-to address
		//$mail->addReplyTo('barra.shelter@gmail.com', 'Ahmad Robbahul Barabara');
		//Set who the message is to be sent to
		$mail->addAddress($to);
		// Set email format to HTML
		$mail->isHTML(true);
		//Set the subject line
		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = strip_tags($message);
		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');
		//send the message, check for errors
		if (!$mail->send())
			return "Mailer Error: " . $mail->ErrorInfo;
	}	
}