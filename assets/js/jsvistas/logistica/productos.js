$(document).ready(function(){
	$("#ProductoForm").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});

	//CARGAR MARCAS EN EL COMBO BOX	
	$(".SelectAjax").SelectAjax();

	var TipoProdTA = new DTActions({
		'conf': '010',
		'idtable': 'productos_table',
		'EditFunction': function(nRow, aData, iDisplayIndex) {
			$("#btn-reg-prod").hide();
			$("#btn-editar-prod").show();
	  		$('#modalProductos').modal('show');
	  		$("#serie").val(aData.cProductoSerie);
	  		$("#talla").val(aData.cProductoTalla);
	  		$("#descripcion").val(aData.cProductoDesc);
	  		$("#preciocosto").val(aData.nProductoPCosto);
	  		$('#precioventa').val(aData.nProductoPVenta);
	  		$("#stockmax").val(aData.nProductoStockMax);
	  		$("#stockmin").val(aData.nProductoStockMin);	  		
	  		$("#codigo").val(aData.nProducto_id);
		},
	});	

	TipoProdRowCBF = function(nRow, aData, iDisplayIndex){
		TipoProdTA.RowCBFunction(nRow, aData, iDisplayIndex);	
	};

	var ProductosOptions = {
		"aoColumns":[
			 		  { "mDataProp": "cProductoDesc"},
		              { "mDataProp": "cMarcaDesc"},
		              { "mDataProp": "cConstanteDesc"},
		              { "mDataProp": "cCategoriaNom"},
		              { "mDataProp": "nProductoStock"},
		              { "mDataProp": "nProductoPCosto"},
		              { "mDataProp": "nProductoPVenta"},
		              { "mDataProp": "nProductoUnidMedida"},
		              { "mDataProp": "cProductoCodBarra"}
				],
		"fnCreatedRow": TipoProdTA.RowCBFunction
	};
	var TipoProductoTable = createDataTable2('productos_table',ProductosOptions);	              

	var successProducto = function(){
		//alert("Hola Como estas");
		$('#ProductoForm').reset();
		$('#modalProductos').modal('hide');
		TipoProductoTable.fnReloadAjax()
	}

	/*function prepararDatos(){
			DataToSend = {
				formulario:$("#ProductoForm").serializeObject(),
				productos:CopyArray(SelectProductosData,["nProducto_id"])
				
				};
		} */


	//Llamar al modal Registrar-Modal
	$('#btn-reg').click(function(e){
	e.preventDefault();
	$('#modalProductos').modal('show');
	});
	//Registrar
	$("#btn-reg-prod").click(function(event){
		event.preventDefault();
		if($("#ProductoForm").validationEngine('validate'))
			//para vefiricar console.log($("#TipoIGV_Registrar").serializeObject());
			enviar($("#ProductoForm").attr("action-1"),{formulario:$("#ProductoForm").serializeObject()}, successProducto, null)
	});
	//Editar
	$("#btn-editar-prod").click(function(event){
		event.preventDefault();
		if($("#ProductoForm").validationEngine('validate'))
			enviar($("#ProductoForm").attr("action-2"),{formulario:$("#ProductoForm").serializeObject()}, successProducto, null)		
	});



	//Modal verificar Acciones	
	$('#modalProductos').on('hidden', function(){		
		$("#ProductoForm").reset();
		$("#btn-reg-prod").show();
		$("#btn-editar-prod").hide();
	});


});