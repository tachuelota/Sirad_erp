<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class confdoc extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('administracion/confdoc_model','cdm');
	}
	
	public function registrar(){
		$form = $this->input->post('formulario');
	
		$Serie = null;
		$Numero = null;
		$estado="1";
		$tipoComprobante=null; 
		
		if ($form!=null){
			$Serie = $form["NumSerie"];
			$Numero = $form["NumComp"];
			//$estado=$form[""];
			$tipoComprobante=$form["TipDoc"]; 
							
			$Data = 
				array(
					'cDocNumSerie' => $Serie,
					'cDocNumComprobante' =>$Numero,
					'cDocEstado'=>$estado,
					'nTipoComprobante'=>$tipoComprobante );
	
			if($this->cdm->insert($Data)){
				$return = array("responseCode"=>200, "datos"=>"ok");
			}else{
				$return = array("responseCode"=>400, "greeting"=>"Bad");
			}; 

		}
		else {
			$return = array("responseCode"=>400, "greeting"=>"Bad");
		} 
	
		$return = json_encode($return);
		echo $return;
	} 
	
	public function editar(){
		$form = $this->input->post('formulario',null);
		
		$id=null;
		$Serie = null;
		$Numero = null;
		$estado="1";
		$tipoComprobante=null; 
		
		if ($form!=null){
			$id=$form[""];
			$Serie = $form[""];
			$Numero = $form[""];
			$estado=$form[""];
			$tipoComprobante=$form[""]; 
							
			$Data = 
				array(
					'nDocNumSerie' => $Serie,'nDocNumComprobante' =>$Numero,'cDocEstado'=>$estado,'cTipoComprobante'=>$tipoComprobante );		
			
			if($this->cdm->update($id,$data)){
				$return = array('responseCode'=>200, 'datos'=>$data);
			}
			else{
				$return = array('responseCode'=>400, 'greeting'=>'Bad');
			}		
		}
		else {
			$return = array("responseCode"=>400, "greeting"=>"Bad");
		} 
	
		$return = json_encode($return);
		echo $return;
	}
	
}
