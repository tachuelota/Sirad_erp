<?php 
if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');
/**
* Controler Locales
*/
class ordercompramaterial extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('logistica/compramat_model','ocm');
		$this->load->model('logistica/detcompramat_model','docm');
	}

	public function registrar(){

		$form = $this->input->post('formulario');
		$tabla = $this->input->post('tabla',true);		
		
		if ($form!=null){
			//CABECERA
			$idPersonal = $form[""];
			$idProveedor=$form[""];
			$subtotal = $form[""];
			$descuento=$form[""];
			$igv = $form[""];
			$total=$form[""];
			$Observacion = $form[""];
			$docSerie=$form[""];
			$docNumero=$form[""];
			$tipodoc=$form[""];
			
			$OrdCompras = array(
				'nPersonal_id' => $idPersonal,
				'nProveedor_id' =>$idProveedor,
				'nOrdComMatSubTotal' => $subtotal,
				'nOrdComMatIGV' => $igv,
				'nOrdComMatTotal' => $total,
				'cOrdComMatObsv'=>$Observacion,
				'nOrdComMatDesct'=>$descuento,
				'cOrdComMatDocSerie'=>$docSerie,
				'cOrdComMatDocNro'=>$docNumero,
				'nOrdTipoDocumento'=>$tipodoc);
			$band = true;
			//$this->db->trans_begin();
			$OrdCompra_id = $this->ordcom->insert($OrdCompras);
			if($OrdCompra_id === FALSE)
			{ 
				$this->output->set_status_header('400');
				$band = false;
			} 
			else
			{
				/*foreach ($tabla as $key => $row)
				{
					$tabla[$key]["nOrdenCompra_id"] = intval($OrdCompra_id);

				}
				if(!$this->detordcom->insert_batch($tabla))
					$band = false;*/
					echo "INSERTO CORRECTAMENTE LA CABECERA";
				
			}

			/*if($band)
				$this->db->trans_commit();
			else
			{
				$this->db->trans_rollback();
				$this->output->set_status_header('400');
			}*/
		}
		else 
		{
			$this->output->set_status_header('400');
			$return = "bad";
		} 
	
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode("ok"));
	}
}

?>