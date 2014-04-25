$(document).ready(function(){

	var urlExportXLS = base_url +"assets/extensiones/reportes_xls/formato_reporte_cajaDetalle.php"

	var CajaActions = new DTActions({
		'conf': '110',
		'view_tooltip':"Reporte General",
		'edit_tooltip': "Reporte Movimiento",
		'report1_icon':"glyphicon glyphicon-stats",
		'report2_icon':"glyphicon glyphicon-signal",
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
		//location.reload(true);
		$.unblockUI({
		    onUnblock: function(){
				//$("#InicieCajaForm").reset();	
				location.reload(true);			
				
			}
		})
	}
	/*var successCierre_Caja = function(){
		location.reload(true);
		/*$.unblockUI({
		    onUnblock: function(){
				//$("#InicieCajaForm").reset();	
				location.reload(true);			
				
			}
		})
	}*/


	// Reportes

	


	var crearTabla = function(id)
	{
		var detalleCaja = getAjaxObject(base_url+"ventas/servicios/getDetalleCaja_byCaja/"+id)
		table_caja = toHTML(crearTablaToArray("tcaja",
				['Nro Venta','Tipo de Venta','Cliente','Total Pagado','Saldo','Descuento','Estado'],
				[	'style="width: 5%;" class="head" ','style="width: 20%;" class="head" ','style="width: 20%;" class="head" ',
					'style="width: 10%;" class="head" ','style="width: 10%;" class="head" ','style="width: 15%;" class="head" ',
					'style="width: 20%;" class="head" ',],
				['nVenta_id','TipoVenta','cliente','TotalApagar','Saldo','Descuento','Estado'],
				[	'style="width: 5%;" ','style="width: 20%;" ','style="width: 20%;" ',
					'style="width: 10%;" ','style="width: 10%;" ','style="width: 15%;" ','style="width: 20%;" '],
					detalleCaja.aaData));
		$("#title").val("DETALLE CAJA");
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

	$("#Cerrar_caja").click(function(event){
		event.preventDefault();
		if($("#InicieCajaForm").validationEngine('validate'))
			// para vefiricar console.log($("#CargoForm").serializeObject());
			$.blockUI({ 
				onBlock: function()
				{
					enviar($("#InicieCajaForm").attr("action-2"),{formulario:$("#InicieCajaForm").serializeObject()}, successInicie_Caja, null)
				
				}
			});
	});

});