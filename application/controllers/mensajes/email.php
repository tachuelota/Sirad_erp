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
        $from = $this->ion_auth->user()->row()->email;		    
            
        $para           =  "avilasauna@gmail.com";
        $subject        =  "Reporte de Productos con Stock Minimo";
        $msg            =  "holaaaaaaaa" ;
        $mainheaders    =  "Content-type: text/html; charset=utf-8\r\n";
        $mainheaders   .=  "From: dana_17e@hotmail.com";
        $mainheaders   .=  "To: sabrina_46_6@hotmail.com";

        $resultado = mail ($para, $subject, $msg, $mainheaders);

        if($resultado){
           echo 'Tu mensaje ha sido enviado!';
            }        
        else
            echo 'Error!';

    }


}