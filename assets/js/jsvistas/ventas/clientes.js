$(document).ready(function(){
$(".SelectAjax").SelectAjax();
$("#ClienteForm").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});
$("#ClienteForm1").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});
	var Ubigeos = getAjaxObject($("#ClienteForm").attr("data-source"));
	cargarUbigeo(Ubigeos,"dist", "prov", "dep");

	var urlExportXLS = base_url +"assets/extensiones/reportes_xls/formato_reporte_clientes.php"
	var urlExportPDF = base_url +"assets/extensiones/reportes_pdf/formato_reporte_clientes.php";

    //selector por clase 
	/*$(".ubigeo").change(function(){
		cargarZonas();
	});*/

	/*var cargarZonas = function(){
		var zonas=getAjaxObject(base_url+"administracion/servicios/get_ZonaByUbigeo/"+$("#dist").val());
		cargarSelect(zonas.aaData,"zonas","nZona_id","cZonaDesc");
	};
	cargarZonas();*/

	var ClientesTA = new DTActions({
	'conf': '010',
	'idtable': 'clientes_table',
	'EditFunction': function(nRow, aData, iDisplayIndex) {
		$("#btn-reg-clientes").hide();
		$("#btn-editar-clientes").show();
		$('#modalClientes').modal('show');
		$("#nombres").val(aData.cClienteNom);	
		$("#apellidos").val(aData.cClienteApe);
		$("#dni").val(aData.cClienteDNI);	
		$("#referencia").val(aData.cClienteRef);	
		$("#direccion").val(aData.cClientecDir);	
		$("#zonas").val(aData.nZona_id);	
		$("#lineaop").val(aData.nClienteLineaOp);	
		$("#ocupacion").val(aData.cClienteOcup);
		$("#telefono").val(aData.cClienteTel);		
		$("#idClientes").val(aData.nCliente_id);
		cargarUbigeo(Ubigeos,"dist", "prov", "dep",aData.nUbigeo_id);
		//cargarZonas();
		},
	});

   ClientesRowCBF = function(nRow, aData, iDisplayIndex){
		ClientesTA.RowCBFunction(nRow, aData, iDisplayIndex);	
	};

	var ClientesOptions = {
		"aoColumns":[
			{ "mDataProp": "cClienteNom"},
			{ "mDataProp": "cClienteApe"},
			{ "mDataProp": "cClienteDNI"},	
			{ "mDataProp": "cClienteTel"}
				],
		"fnCreatedRow": ClientesTA.RowCBFunction
	};
	var ClientesTable = createDataTable2('clientes_table',ClientesOptions);


	//--funcion de los botones

	$('#modalClientes').on('hidden.bs.modal', function(){		
		$("#ClienteForm").reset();
		$("#btn-reg-clientes").show();
		$("#btn-editar-clientes").hide();
	});

	$("#btn-reg-clientes").click(function(event){
		event.preventDefault();
		if($("#ClienteForm").validationEngine('validate'))
			$.blockUI({ 
				onBlock: function()
				{
					$('#modalClientes').modal('hide');
					enviar($("#ClienteForm").attr("action-1"),{formulario:$("#ClienteForm").serializeObject()}, successClientes, null);
				}
			});
	});

	$("#btn-editar-clientes").click(function(event){
		event.preventDefault();
		if($("#ClienteForm").validationEngine('validate'))
			$.blockUI({ 
				onBlock: function()
				{
					$('#modalClientes').modal('hide');
					enviar($("#ClienteForm").attr("action-2"),{formulario:$("#ClienteForm").serializeObject()}, successClientes, null);
				}
			});
	});

	var successClientes = function(){
		$.unblockUI({
		    onUnblock: function(){
				$('#ClienteForm').reset();
				ClientesTable.fnReloadAjax()
			}
		});
	}

	//codigo del php anterior
	$('.btn-registrar').click(function(e){
		e.preventDefault();
		$('#modalClientes').modal('show');
	});

	$("#pdfgen").click(function(){

	//ClientesRowCBF = function (){
		table_clientes = toHTML(crearTablaToArray("tclientes",
				['ID','NOMBRE','DNI','LINEA OPERATIVA','ZONA','DIRECCIÓN'],
				[	'style="width: 5%;" class="head" ','style="width: 25%;" class="head" ','style="width: 15%;" class="head" ',
					'style="width: 15%;" class="head" ','style="width: 15%;" class="head" ','style="width: 25%;" class="head" ',],
				['nCliente_id','cClienteNom','cClienteDNI','nClienteLineaOp','cZonaDesc','cClientecDir'],
				[	'style="width: 5%;" ','style="width: 25%;" ','style="width: 15%;" ',
					'style="width: 15%;" ','style="width: 15%;" ','style="width: 25%;" '],
					ClientesTable.fnGetData()));
		//};
		$("#title").val("LISTA DE CLIENTES");
		$("#table_clientes").val(table_clientes);
		$("#exportmodal").modal('show');	
		console.log(table_clientes);
	});

	
	$("#pdfbutton").click(function(e){
		e.preventDefault();
		$("#CreatePDFForm").attr("action",urlExportPDF);
		$("#CreatePDFForm").submit();
		$("#exportmodal").modal('hide');
	});

	$("#xlsutton").click(function(e){
		e.preventDefault();
		$("#CreatePDFForm").attr("action",urlExportXLS);
		$("#CreatePDFForm").submit();
		$("#exportmodal").modal('hide');
	});
	  // fin
});
