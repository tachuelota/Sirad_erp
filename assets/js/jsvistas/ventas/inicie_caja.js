$(document).ready(function(){
	var CajaActions = new DTActions({
		'conf': '100',		
		'ViewFunction':function(nRow, aData, iDisplayIndex){
			location.href = base_url+"ventas/views/ver_caja/"+aData.nCaja_id;
		}
	});

	var CajaOptions = {
		"aoColumns":[
			{ "mDataProp": "NombreLocal"},
			{ "mDataProp": "FechaApertura"},
		    { "mDataProp": "FechaCierre"},
		    { "mDataProp": "SaldoFinal"},
		    { "mDataProp": "FaltanteSobrante"},
		    { "mDataProp": "SaldoFinalCaja"},
		    { "mDataProp": "Estado"}
				],
		"fnCreatedRow": CajaActions.RowCBFunction
	};
	var CajaTable = createDataTable2('caja_table',CajaOptions);

	var successInicie_Caja = function(){
		$("#importe").disabled=true;
		$.unblockUI({
		    onUnblock: function(){
				//$("#InicieCajaForm").reset();				
				
			}
		})
	}

	$("#Abrir_caja").click(function(event){
		event.preventDefault();
		if($("#InicieCajaForm").validationEngine('validate'))
			// para vefiricar console.log($("#CargoForm").serializeObject());
			$.blockUI({ 
				onBlock: function()
				{
					enviar($("#InicieCajaForm").attr("action-1"),{formulario:$("#InicieCajaForm").serializeObject()}, successInicie_Caja, null)
				}
			});
	});

});