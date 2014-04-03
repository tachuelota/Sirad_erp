<?php 
if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');
/**
* Controler producto
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
		if($this->ion_auth->in_group_type(2))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Logistica -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/homepage.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/homepage.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/', 'refresh');
	}

	public function cons_ordencompra()
	{
		if($this->ion_auth->in_group("log_ord_comp"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - OrdenCompras -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/cons_ordencompras.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/cons_ordencompras.js';
			$datafooter['active'] = 'ord_com';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function reg_ordencompra()
	{
		if($this->ion_auth->in_group("log_ord_comp"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - OrdenCompras (Registrar) -';
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);			
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["local"] = $this->session->userdata('current_local');			
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/reg_ordencompras.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/reg_ordencompras.js';
			$datafooter['active'] = 'ord_com';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function ver_ordencompras($nOrdenCom_id)
	{
		if($this->ion_auth->in_group("log_ord_comp"))
		{
			$this->load->model('logistica/ordcompra_model','ordcomp');
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - OrdenCompras (Ver) -';
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata = $this->ordcomp->get_OrdCompra_views($nOrdenCom_id);				
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/ver_ordencompras.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/ver_ordencompras.js';
			$datafooter['active'] = 'ord_com';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function cons_ingresoproductos()
	{
		if($this->ion_auth->in_group("log_ing_prod"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Ingreso Productos -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/cons_ingresoproductos.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/cons_ingresoproductos.js';
			$datafooter['active'] = 'ing_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}	
	public function reg_ingresoproductos()
	{
		if($this->ion_auth->in_group("log_ing_prod"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Ingreso Productos (Registrar) - ';
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["local"] = $this->session->userdata('current_local');			
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/reg_ingresoproductos.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/reg_ingresoproductos.js';
			$datafooter['active'] = 'ing_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}
	public function editar_ingresoproductos($nIngProd_id)
	{
		if($this->ion_auth->in_group("log_ing_prod"))
		{
			$this->load->model('logistica/ingproducto_model','ingprod');
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Ingreso Productos (Editar) - ';
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);		
			$pagedata = $this->ingprod->get_IngProducto($nIngProd_id);			
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/editar_ingresoproductos.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/editar_ingresoproductos.js';
			$datafooter['active'] = 'ing_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}
	public function ver_ingresoproductos($nIngProd_id)
	{
		if($this->ion_auth->in_group("log_ing_prod"))
		{
			$this->load->model('logistica/ingproducto_model','ingprod');
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Ingreso Productos (Ver) - ';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);		
			$pagedata = $this->ingprod->get_IngProducto($nIngProd_id);			
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/ver_ingresoproductos.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/ver_ingresoproductos.js';
			$datafooter['active'] = 'ing_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function kardex()
	{
		if($this->ion_auth->in_group("log_gen_kardex"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Kardex -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["local"] = $this->session->userdata('current_local');			
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/kardex.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/kardex.js';
			$datafooter['active'] = 'gen_kardex';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function productos()
	{
		if($this->ion_auth->in_group("log_prod"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Productos -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["local"] = $this->session->userdata('current_local');
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/productos.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/productos.js';
			$datafooter['active'] = 'admin_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function proveedores()
	{
		if($this->ion_auth->in_group("log_prove"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Proveedores -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/proveedores.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/proveedores.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function cons_salidaproductos()
	{
		if($this->ion_auth->in_group("log_sal_prod"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Salida Productos -';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/cons_salidaproductos.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/cons_salidaproductos.js';
			$datafooter['active'] = 'sal_prod';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}
	public function reg_salidaproductos()
	{
		if($this->ion_auth->in_group("log_sal_prod"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Salida Productos (Registrar) - ';
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["local"] = $this->session->userdata('current_local');			
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/reg_salidaproductos.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/reg_salidaproductos.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function ver_salidaproductos($nSalProd_id)
	{
		if($this->ion_auth->in_group("log_sal_prod"))
		{
			$this->load->model('logistica/salproducto_model','salprod');
			$this->load->model('administracion/Trabajadores_Model','tra');			
			$dataheader['title'] = 'Sirad_erp - Salida Productos (Ver) - ';
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);	
			$pagedata = $this->salprod->get_SalProducto($nSalProd_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/ver_salidaproductos.php',$pagedata);
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/ver_salidaproductos.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function saldo_inicial()
	{
		if($this->ion_auth->in_group("log_sal_ini"))
		{
			$this->load->model('administracion/trabajadores_model','tra');
			$dataheader['title'] = 'Sirad_erp - Saldo Inicial - ';			
			$dataheader['trabaja']=$this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$data["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php',$data);
			$this->load->view('logistica/saldo_inicial.php');
			$datafooter['jsvista'] = base_url().'assets/js/jsvistas/logistica/saldo_inicial.js';
			$datafooter['active'] = '';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	/*public function cons_pedidos()
	{
		if($this->ion_auth->in_group("log_ord_ped"))
		{
			$dataheader['title'] = 'Dicars - Pedidos -';
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php');
			$this->load->view('logistica/pedidos.php');
			$datafooter['jsvista'] = 'assets/js/jsvistas/logistica/pedidos.js';
			$datafooter['active'] = 'ord_ped';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function reg_pedidos()
	{
		if($this->ion_auth->in_group("log_ord_ped"))
		{
			$this->load->model('administracion/Trabajadores_Model','tra');
			$pagedata["trabajador"] = $this->tra->get_trabajadores($this->ion_auth->user()->row()->nPersonal_id);
			$pagedata["local"] = $this->session->userdata('current_local');
			$dataheader['title'] = 'Dicars - Pedidos -';
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php');
			$this->load->view('logistica/reg_pedidos.php',$pagedata);
			$datafooter['jsvista'] = 'assets/js/jsvistas/logistica/reg_pedidos.js';
			$datafooter['active'] = 'ord_ped';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	}

	public function ver_pedidos($nOrdPed_id)
	{
		if($this->ion_auth->in_group("log_ord_ped"))
		{
			$this->load->model('logistica/OrdPedido_Model','ordped');
			$pagedata = $this->ordped->get_OrdPedido_Views($nOrdPed_id);
			$dataheader['title'] = 'Dicars - Pedidos -';
			$this->load->view('templates/headers.php',$dataheader);		
			$this->load->view('templates/menu.php');
			$this->load->view('logistica/ver_pedidos.php',$pagedata);
			$datafooter['jsvista'] = 'assets/js/jsvistas/logistica/ver_pedidos.js';
			$datafooter['active'] = 'ord_ped';
			$this->load->view('templates/footer.php',$datafooter);
		}
		else
			redirect('/logistica', 'refresh');
	} */
	
}