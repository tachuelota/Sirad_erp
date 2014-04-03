$(document).ready(function(){
	$("#CargoForm").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});


 //--------  nombreTableAccion (..ta)
	var CargosTA = new DTActions({
		'conf': '010',
		'idtable': 'cargos_table',
		'EditFunction': function(nRow, aData, iDisplayIndex) {		
			$("#btn-reg-cargo").hide();
			$("#btn-editar-cargo").show();
	  		$('#modalCargo').modal('show');
	  		$("#nom_cargo").val(aData.nCargoDesc);
	  		$("#selectEstado").val(aData.cCargoEst);
	  		$("#idCargo").val(aData.nCargo_id);
		},
	});
//Init------------------------------------>

	CargosRowCBF = function(nRow, aData, iDisplayIndex){
		CargosTA.RowCBFunction(nRow, aData, iDisplayIndex);			
	};

	//mostrar Registrar Cliente------------------------------------>
	$('#btn-reg').click(function(e){
		e.preventDefault();
		$('#modalCargo').modal('show');
	});
	var CargoOptions = {
		"aoColumns":[
			{ "mDataProp": "nCargoDesc"},
		    { "mDataProp": "estadolabel"}
				],
		"fnCreatedRow": CargosTA.RowCBFunction
	};
	var CargosTable = createDataTable2('cargos_table',CargoOptions);



	var successCargo = function(){
		$('#modalCargo').modal('hide');
		CargosTable.fnReloadAjax()
		$("#CargoForm").reset();
	}


	$('#modalCargo').on('hidden', function(){		
		$("#CargoForm").reset();
		$("#btn-reg-cargo").show();
		$("#btn-editar-cargo").hide();		
	});

	 //--funcion de los botones

	$('.btn-registrar').click(function(e){
		e.preventDefault();
		$('#modalCargo').modal('show');
	});

	$("#btn-reg-cargo").click(function(event){
		event.preventDefault();
		if($("#CargoForm").validationEngine('validate'))
			// para vefiricar console.log($("#CargoForm").serializeObject());
			enviar($("#CargoForm").attr("action-1"),{formulario:$("#CargoForm").serializeObject()}, successCargo, null)
	});
	
	$("#btn-editar-cargo").click(function(event){
		event.preventDefault();
		if($("#CargoForm").validationEngine('validate'))
			enviar($("#CargoForm").attr("action-2"),{formulario:$("#CargoForm").serializeObject()}, successCargo, null)
	});
	
	
});