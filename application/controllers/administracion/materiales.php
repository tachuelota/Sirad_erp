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
	
	public function editar(){
		$form = $this->input->post('formulario',null);
	
		$Descripcion = $form["descripcion"];
		$Marca = $form["marca"];
		$Precio = $form["precio"];
		$Categoria = $form["categoria"];
		$UnidadMedida = $form["unimedida"];
		$Estado = $form["estado"];
		$Cantidad=$form["cantidad"];
		
		if ($form!=null){

			$id_Mat = $form["codigo"];
			$Descripcion = $form["descripcion"];
			$Marca = $form["marca"];
			$Precio = $form["precio"];
			$Categoria = $form["categoria"];
			$UnidadMedida = $form["unimedida"];
			$Estado = $form["estado"];
			$Cantidad=$form["cantidad"];
							
			$data = array(
				'cMaterialDesc' => $Descripcion,
				'nMarca_id' => $Marca,
				'nMaterialPCosto' => $Precio,
				'nCategoria_id' => $Categoria,
				'nMaterialCantidad' => $Cantidad,
				'nMaterialUnidMedida' =>$UnidadMedida,
				'cMaterialEst'=>$Estado );		
			
			if($this->mm->update($id_Mat,$data)){
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
