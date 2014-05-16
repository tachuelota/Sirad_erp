<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tipos extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('administracion/tipo_model','timo');
	}
	
	public function registrar(){
		$form = $this->input->post('formulario');
	
		$tipoDesc = null;
		$tipoEst = null;
		$idCategoria=null; 
		$tipoNom=null;
		
		if ($form!=null){
			$tipoDesc = $form["nom_cargo"];
			$tipoEst = $form["selectEstado"];
			$idCategoria=$form[""];
			$tipoNom=$form[""];
							
			$Tipo = array('cTipoProductoDesc' => $tipoDesc,'cTipoProductoEst' =>$tipoEst,'nCategoria_id'=>$idCategoria,
						'cTipoProductoNom'=>$tipoNom );
	
			if($this->timo->insert($Tipo)){
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
		
		$idTipo=null;
		$tipoDesc = null;
		$tipoEst = null;
		$idCategoria=null; 
		$tipoNom=null;
		
		if ($form!=null){
			$idTipo=$form[""];
			$tipoDesc = $form["nom_cargo"];
			$tipoEst = $form["selectEstado"];
			$idCategoria=$form[""];
			$tipoNom=$form[""];							
							
			$Tipo = array('cTipoProductoDesc' => $tipoDesc,'cTipoProductoEst' =>$tipoEst,'nCategoria_id'=>$idCategoria,
						'cTipoProductoNom'=>$tipoNom );		
			
			if($this->timo->update($idTipo,$Tipo)){
				$return = array('responseCode'=>200, 'datos'=>$Tipo);
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
