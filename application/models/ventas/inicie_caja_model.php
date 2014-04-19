<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inicie_caja_model extends CI_Model {

	
	function __construct() {
		parent::__construct();
	}

	function insert($data){
		$this->db->trans_start(true);
		
		$this->db->trans_begin();

		$this->db->insert('caja',$data);

		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return false;
		}
		else
		{
			$this->db->trans_commit();
			return true;
		}
	}

	public function get_EstadoCaja()
	{
		$fechaActual=date('Y-m-d');
		$query = $this->db->query("SELECT * FROM ven_consultar_caja_all  where FechaApertura ='".$fechaActual."'");
		return $query->row_array();
	}



}