<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('mensajes/notificaciones_model','notm');
	}

	function sendemail()
	{
        $prodSinStock = $this->input->post('table_productos');
        $trabCorreo = $this->input->post('trabajadoresId');

		$config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'mail.clmdevelopers.com',
        'smtp_port' => 25,
        'smtp_user' => 'contacto@clmdevelopers.com', 
        'smtp_pass' => 'contactclmdev',         
    );

    $this->load->library('email',$config);
    $this->email->initialize($config);

    $this->email->from('avilasauna@gmail.com');
    $this->email->to($trabCorreo);
    //$this->email->cc();

    $this->email->subject('Reporte de Productos con Stock Minimo');
    $this->email->message($prodSinStock);

    if ($this->email->send()) 
      show_error($this->email->print_debugger());    
    else 
			echo 'Your e-mail has been sent!';
					
	}


}