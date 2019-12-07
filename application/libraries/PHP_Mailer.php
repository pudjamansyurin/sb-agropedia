<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PHP_Mailer {
	public function __construct(){
		require_once(APPPATH."third_party/phpmailer/PHPMailerAutoload.php");
	}
}