<?php 
if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');
/**
* Controler HomePages
*/
class views extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if ($this->ion_auth->logged_in())
		{
			if(!$this->ion_auth->selected_local())
				redirect('auth/select_local', 'refresh');
		}
		else
			redirect('login', 'refresh');
	}

	public function index()
	{
		if($this->ion_auth->in_group_type(3))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Home Page -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/homepages.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/homepages.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/', 'refresh');
	}

	/************************Cargos***************************************/
	public function cargos()
	{
		if($this->ion_auth->in_group("admin_cargo"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Cargos -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/cargos.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/cargos.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/**********************Categorias**********************************/
	public function categorias()
	{
		if($this->ion_auth->in_group("admin_categ"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Categorias -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);		
			$this->load->view('administracion/categorias');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/categorias.js';
			$datafooter['active'] = 'admin_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}

	/*************************CONSTANTES***********************************/
	public function constantes()
	{
		if($this->ion_auth->in_group("admin_const"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Constantes -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/constantes.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/constantes.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/******************LOCALES***********************/
	public function locales()
	{
		if($this->ion_auth->in_group("admin_local"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Locales -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/locales.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/locales.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/**********************MARCAS*******************************/
	public function marcas()
	{
		if($this->ion_auth->in_group("admin_marca"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Marcas -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/marcas.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/marcas.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/****************TIPO IGVS*******************/
	public function tipoIGV()
	{
		if($this->ion_auth->in_group("admin_igv"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Tipo IGV -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/tipoIGV.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/tipoIGV.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/**************************TIPO MONEDAS*************************************/
	public function tipoMonedas()
	{
		if($this->ion_auth->in_group("admin_mon"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Tipo Moneda -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/tipoMonedas.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/tipoMonedas.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/**************USUARIOS¨¨¨¨¨¨¨¨*******************/
	public function usuarios()
	{
		if($this->ion_auth->in_group("admin_us"))
		{
			$this->load->model('administracion/local_model','lo');
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$dataview["locales"] = $this->lo->get_activos();
			$dataview["groups_ventas"] = $this->ion_auth->groups_bytipo(1);
			$dataview["groups_logistica"] = $this->ion_auth->groups_bytipo(2);
			$dataview["groups_administracion"] = $this->ion_auth->groups_bytipo(3);

			$dataheader['title'] = 'Dicars - Usuarios -';
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/usuarios.php',$dataview);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/usuarios.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/**********************ZONA EDIT************************/
	public function editar_zonasPersonal()
	{
		if($this->ion_auth->in_group("admin_pers"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Zona_Edit -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/editar_zonasPersonal.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/zona_edit.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/**********ZONA PERSONAL**************/
	public function zona_personal()
	{
		if($this->ion_auth->in_group("admin_zonpers"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Zona_Edit -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/zona_personal.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/zona_personal.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	/***********************ZONAS*************************/
	public function cons_zonas()
	{
		if($this->ion_auth->in_group("admin_zona"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Zonas -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/cons_zonas.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/zonas.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}
	
	//Trabajadores

	public function trabajadores()
	{
		if($this->ion_auth->in_group("admin_trab"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Trabajadores -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/trabajadores.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/trabajadores.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}

	
    //Ofertas
	public function ofertas()
	{
		if($this->ion_auth->in_group("admin_ofert"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Dicars - Ofertas -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/ofertas.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/ofertas.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}

	//Editar Ofertas
	public function editar_ofertas($nOferta_id)
	{
		if($this->ion_auth->in_group("admin_ofert"))
		{
			$this->load->model('administracion/oferta_model','ofertm');
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata = $this->ofertm->get_ofertas($nOferta_id);
			$dataheader['title'] = 'Dicars - Ofertas -';
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('administracion/editar_ofertas.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/editar_ofertas.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/administracion', 'refresh');
	}

	//Editar Ofertas
	public function change_password()
	{
		$this->load->model('administracion/trabajadores_model','tra');
		$dataheader['title'] = 'Dicars - Cambiar contraseña -';		
		$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
		$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
		$this->load->view('templates/headers.php',$dataheader);		
		$this->load->view('templates/menu.php',$data);
		$this->load->view('administracion/change_password.php');
		$datafooter['jsvista'] = base_url().'assets/js/jsvistas/administracion/change_password.js';
		$datafooter['active'] = '';
		$this->load->view('templates/footer.php',$datafooter);
	}
}