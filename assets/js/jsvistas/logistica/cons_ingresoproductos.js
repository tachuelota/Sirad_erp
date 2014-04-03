
$(document).ready(function(){
	$("#IngProductosForm").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});
	var IngresoProductosTA = new DTActions({
		'conf': '110',
		'idtable': 'ingreso_productos_table',
		'EditFunction': function(nRow, aData, iDisplayIndex) {
			//location.href = $("#IngProductosForm").attr("action-2")+aData.nOferta_id;
			location.href = $("#IngProductosForm").attr("action-2")+"/"+aData.nIngProd_id;
			
		},
		'ViewFunction':function(nRow, aData, iDisplayIndex){
			location.href = $("#IngProductosForm").attr("action-3")+"/"+aData.nIngProd_id;
		}
	});

	IngresoProductosRowCBF = function(nRow, aData, iDisplayIndex){
		IngresoProductosTA.RowCBFunction(nRow, aData, iDisplayIndex);	
	};
	var IngreProductosOptions = {
		"aoColumns":[
			 		  { "mDataProp": "dIngProdFecReg"},
		              { "mDataProp": "cIngProdNro"},
		              { "mDataProp": "nomape"},
		              { "mDataProp": "DescMotivo"},
		              { "mDataProp": "cIngProdDocNro"},
				],
		"fnCreatedRow": IngresoProductosTA.RowCBFunction
	};
	var IngresoProductosTable = createDataTable2('ingreso_productos_table',IngreProductosOptions);



	
	/********************************/
	var successProducto = function(){
		//alert("Hola Como estas");
		//$('#modalProductos').modal('hide');
		//TipoProductoTable.fnReloadAjax()
	}

	

	//Buscar
	$("#buscarfecha").click(function(event){
		date1 = new Date($("#date01").datepicker("getDates"));
		date2 = new Date($("#date02").datepicker("getDates"));
		IngresoProductosTable.fnReloadAjax($("#IngProductosForm").attr("action-1")+"/"+fechaFormatoSQL(date1)+"/"+fechaFormatoSQL(date2))
	});




});