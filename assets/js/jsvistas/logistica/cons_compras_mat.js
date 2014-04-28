$(document).ready(function(){

	var OrdComprasOptions = {
		"aoColumns":[
			 		  { "mDataProp": "serNumOrdComMat"},
		              { "mDataProp": "OrdComMatFecReg"},
		              { "mDataProp": "cPersonalNom"},
		              { "mDataProp": "cProveedorRazSocial"},
		              { "mDataProp": "nOrdComMatTotal"},
		              { "mDataProp": "estadolabel"}
				]

	};
	var OrdenCompraTable = createDataTable2('ordcom_table',OrdComprasOptions);


	$("#buscarfecha").click(function(event){
		date1 = new Date($("#date01").datepicker("getDates"));
		date2 = new Date($("#date02").datepicker("getDates"));
		OrdenCompraTable.fnReloadAjax($("#OrdCompraForm").attr("action-1")+"/"+fechaFormatoSQL(date1)+"/"+fechaFormatoSQL(date2));
		OrdenCompraTable.reloadSigleFilter();
	});

});