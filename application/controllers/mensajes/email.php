<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('administracion/cargo_model','acam');
	}

	/*function get_email()
	{
		$config = array(

			);
		$this->load->library('email');
		$this->email->from('avilasauna@gmail.com', 'Nombre');
		$this->email->cc('avilasauna@gmail.com');
		$this->email->bcc('avilasauna@gmail.com'); 

		$this->email->subject('Mi correo a través de CodeIgniter desde localhost'); 
		$this->email->message('Probando Email .....');
	
		if ($this->email->send()) {
			//echo "correo enviado";
			$this->load();
		}
		else
			echo $this->email->print_debugger();
	} */

	function sendemail()
	{
		  $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'mail.clmdevelopers.com',
        'smtp_port' => 25,
        'smtp_user' => 'contacto@clmdevelopers.com', 
        'smtp_pass' => 'contactclmdev',         
    );

    $this->load->library('email',$config);

    $this->email->from('avilasauna@gmail.com');
    $this->email->to('avilasauna@gmail.com');
    $this->email->bcc('avilasauna@gmail.com', 'Cinthya');

    $this->email->subject('Message sent from the contact form in website');
    $this->email->message('Body of message...');

    if ($this->email->send()) {
           show_error($this->email->print_debugger()); 
    }
    else  {
 echo 'Your e-mail has been sent!';}
	}


}