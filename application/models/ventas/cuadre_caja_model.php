<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cuadre_caja_model extends CI_Model {

	
	function __construct() {
		parent::__construct();
	}

	function insert($data){
		
	}


	public function get_EstadoCaja()
	{
		
	}


	public function get_cuadrecaja()
	{
		$query = $this ->db->query ('select * from ven_consultar_caja_all;');
		return $query -> result_array();
	
	}

}