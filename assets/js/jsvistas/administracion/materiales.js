$(document).ready(function(){

	$(".SelectAjax").SelectAjax();

	$('#btn-reg').click(function(e){
		e.preventDefault();
		$('#modalMateriales').modal('show');
	});

	//DATATABLE MATERIAL
	var MaterialOptions = {
		"aoColumns":[
			{ "mDataProp": "cMaterialDesc"},
			{ "mDataProp": "cMarcaDesc"},
			{ "mDataProp": "cCategoriaNom"},
			{ "mDataProp": "nMaterialCantidad"},
			{ "mDataProp": "nMaterialPCosto"},
		    { "mDataProp": "cConstanteDesc"}
				]
		//"fnCreatedRow": CargosTA.RowCBFunction
	};
	var MaterialTable = createDataTable2('materiales_table',MaterialOptions);


	var successMaterial = function(){
		$.unblockUI({
		    onUnblock: function(){
				MaterialTable.fnReloadAjax()
				$("#MaterialForm").reset();
			}
		})
	}


	$("#btn-reg-mat").click(function(event){
		event.preventDefault();
		if($("#MaterialForm").validationEngine('validate'))
			// para vefiricar console.log($("#CargoForm").serializeObject());
			$.blockUI({ 
				onBlock: function()
				{
					$('#modalMateriales').modal('hide');
					enviar($("#MaterialForm").attr("action-1"),{formulario:$("#MaterialForm").serializeObject()}, successMaterial, null)
			//$.blockUI({onOverlayClick: $.unblockUI}); 
				}
			});
	});

});