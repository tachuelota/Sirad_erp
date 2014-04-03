$(document).ready(function(){
	$("#ProveedorForm").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});
		var TipoProveedorTA = new DTActions({
		'conf': '010',
		'idtable': 'proveedores_table',
		'EditFunction': function(nRow, aData, iDisplayIndex) {
			$("#btn-reg-proveedor").hide();
			$("#btn-editar-proveedor").show();
	  		$('#modalProveedores').modal('show');
	  		$("#ruc").val(aData.cProveedorRuc);
	  		$("#razonsocial").val(aData.cProveedorRazSocial);
	  		$("#telefono").val(aData.cProveedorTel);
	  		$("#email").val(aData.cProveedorEmail);
	  		$("#paginaweb").val(aData.cProveedorSitioWeb);
	  		$("#direccion").val(aData.cProveedorDirec);
	  		$("#ccorriente").val(aData.cProveedorCCorriente);
	  		//$("#stockmin").val(aData.nProductoStockMin);

	  		$("#codigo").val(aData.nProveedor_id);
		},
	});		


		TipoProveedorRowCBF = function(nRow, aData, iDisplayIndex){
		TipoProveedorTA.RowCBFunction(nRow, aData, iDisplayIndex);	
		};

		var ProveedoresOptions = {
		"aoColumns":[
			 		  { "mDataProp": "cProveedorRuc"},
		              { "mDataProp": "cProveedorRazSocial"},
		              { "mDataProp": "cProveedorTel"},
		              { "mDataProp": "cProveedorEmail"}
				],
		"fnCreatedRow": TipoProveedorTA.RowCBFunction
	};
	var TipoProveedorTable = createDataTable2('proveedores_table',ProveedoresOptions);

	var successProveedor = function(){
		//alert("Hola Como estas");
		$('#modalProveedores').modal('hide');
		$("#ProveedorForm").reset();
		TipoProveedorTable.fnReloadAjax()
	}

	$('#btn-reg').click(function(e){
	e.preventDefault();
	$('#modalProveedores').modal('show');
	});

	//Registrar
	$("#btn-reg-proveedor").click(function(event){
		event.preventDefault();
		if($("#ProveedorForm").validationEngine('validate'))
			//para vefiricar console.log($("#TipoIGV_Registrar").serializeObject());
			enviar($("#ProveedorForm").attr("action-1"),{formulario:$("#ProveedorForm").serializeObject()}, successProveedor, null)
	});
	$("#btn-editar-proveedor").click(function(event){
		event.preventDefault();
		if($("#ProveedorForm").validationEngine('validate'))
			enviar($("#ProveedorForm").attr("action-2"),{formulario:$("#ProveedorForm").serializeObject()}, successProveedor, null)
	});

	//Modal verificar Acciones	
	$('#modalProveedores').on('hidden', function(){		
		$("#ProveedorForm").reset();
		$("#btn-reg-proveedor").show();
		$("#btn-editar-proveedor").hide();
	});


});