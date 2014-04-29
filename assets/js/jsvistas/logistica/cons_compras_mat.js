$(document).ready(function(){

	var OrdenCompraTA = new DTActions({
	'conf': '100',
	'idtable': 'ordcom_table',
	'ViewFunction':function(nRow, aData, iDisplayIndex){
		location.href = $("#OrdCompraMaterialesForm").attr("action-2")+"/"+aData.nOrdenComMat_id;
	}
	});

	OrdenCompraRowCBF = function(nRow, aData, iDisplayIndex){
		OrdenCompraTA.RowCBFunction(nRow, aData, iDisplayIndex);	
	};


	var OrdComprasOptions = {
		"aoColumns":[
			 		  { "mDataProp": "serNumOrdComMat"},
		              { "mDataProp": "OrdComMatFecReg"},
		              { "mDataProp": "cPersonalNom"},
		              { "mDataProp": "cProveedorRazSocial"},
		              { "mDataProp": "nOrdComMatTotal"},
		              { "mDataProp": "estadolabel"}
				],
		"fnCreatedRow": OrdenCompraTA.RowCBFunction,
		"sDom": "t<'row'<'col-xs-6'i><'col-xs-6'p>>"
	};

	var OrdenCompraTable = createDataTable2('ordcom_table',OrdComprasOptions);


	$("#buscarfecha").click(function(event){
		date1 = new Date($("#date01").datepicker("getDates"));
		date2 = new Date($("#date02").datepicker("getDates"));
		OrdenCompraTable.fnReloadAjax($("#OrdCompraMaterialesForm").attr("action-1")+"/"+fechaFormatoSQL(date1)+"/"+fechaFormatoSQL(date2));
		OrdenCompraTable.reloadSigleFilter();
	});

	
});