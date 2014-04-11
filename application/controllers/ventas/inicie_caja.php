<?php if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');

class clientes extends CI_Controller {
public function __construct()
	{
		parent::__construct();		
		$this->load->model('ventas/inicie_caja_model','inicie');
	}

public function registrar(){
		$form = $this->input->post('formulario');
		
		$fecInicial = null;
		$fechApertura = null; 
		$saldoInicial = null;
		$cajaIngreso = null;
		$cajaEgreso = null;
		$estado = null;
		$idUsuario = null;
		$idLocal = null;
		$saldoFinal=null;
		$saldoSobrante=null;			

		if ($form != null)
		{
			$fecInicial = $form[""];
			$fechApertura = $form[""];
			$saldoInicial = $form[""];
			$cajaIngreso = $form[""];
			$cajaEgreso = $form[""];			
			$estado = $form[""];
			$idUsuario=1;				
			$idLocal = $form[""];	
			$saldoFinal =null;
			$saldoSobrante = $form["ocupacion"];				
			
			$Caja = array(
				'dCajaFechaApertura'=> $fecInicial,
				'dCajaFechaCierre'=> $fechApertura,
				'nCajaSaldoInicial'=> $saldoInicial,				
			 	'nCajaIngreso' => $cajaIngreso,
				'nCajaEgreso' => $cajaEgreso,
			 	'cCajaEstado'=> $estado,
			 	'nUsuario_id'=> $idUsuario,
			 	'nLocal_id' =>$idLocal,
			 	'nCajaSaldoFinal'=> $saldoFinal,
			 	'nCajaFaltanteSobrante'=>$saldoSobrante);
			if($this->inicie->insert($Caja))
				$return = array("responseCode"=>200, "datos"=>"ok");
			else
				$return = array("responseCode"=>400, "greeting"=>"Bad");
		} 
		else
			$return = array("responseCode"=>400, "greeting"=>"Bad");

		$return = json_encode($	);
		echo $return;
	}
}