<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class confdoc_model extends CI_Model {

	
	function __construct() {
		parent::__construct();
	}

	public function insert($data){
		
		$this->db->trans_start(true);
		
		$this->db->trans_begin();

		$this->db->insert('configuracion_documento',$data);

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

	public function update($id,$data){
		
		$this->db->trans_start();
		
		$this->db->trans_begin();

        $this->db->where('idConfDoc',$id);
		$this->db->update('configuracion_documento',$data);

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
/*

 	public function get_cargos($nCargo_id = FALSE)
	{
		if($nCargo_id === FALSE )
		{
			$query = $this ->db->query ('select * from ven_cargo_all;');
			return $query -> result_array();
		}
		$query = $this->db->get_where('ven_cargo', array('nCargo_id' => $nCargo_id));
		return $query->row_array();
	}
*/

}