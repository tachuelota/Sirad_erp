<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class materiales extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('administracion/material_model','mm');
	}
	
	public function registrar(){
		$form = $this->input->post('formulario');

		if ($form!=null){
			$Descripcion = $form["descripcion"];
			$Marca = $form["marca"];
			$Precio = $form["precio"];
			$Categoria = $form["categoria"];
			$UnidadMedida = $form["unimedida"];
			$Estado = $form["estado"];
			$Cantidad=$form["cantidad"];
							
			$Material = array(
				'cMaterialDesc' => $Descripcion,
				'nMarca_id' => $Marca,
				'nMaterialPCosto' => $Precio,
				'nCategoria_id' => $Categoria,
				'nMaterialCantidad' => $Cantidad,
				'nMaterialUnidMedida' =>$UnidadMedida,
				'cMaterialEst'=>$Estado );
	
			if($this->mm->insert($Material)){
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
	
	/*public function editar(){
		$form = $this->input->post('formulario',null);
	
		$CargoDesc = null;
		$cCargoEst = null; 
		
		if ($form!=null){

			$Cargoid = $form["idCargo"];
			$CargoDesc = $form["nom_cargo"];
			$cCargoEst = $form["selectEstado"];
							
			$data = array('nCargoDesc' => $CargoDesc,'cCargoEst' =>$cCargoEst );		
			
			if($this->acam->update($Cargoid,$data)){
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
	}*/
	
}
