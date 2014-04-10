
$(document).ready(function(){
	$("#CategoriaForm").validationEngine('attach',{autoHidePrompt:true,autoHideDelay:3000});

	var Actions = new DTActions({
		'conf': '010',
		'idtable': 'categorias_table',
		'EditFunction': function(nRow, aData, iDisplayIndex) {
			$("#btn-reg-categoria").hide();
			$("#btn-editar-categoria").show();
	  		$('#modalCategoria').modal('show');
	  		$("#nom_categoria").val(aData.cCategoriaNom);
	  		$("#desc_categoria").val(aData.cCategoriaDesc);
	  		$("#selectEstado").val(aData.cCategoriaEst);
	  		$("#idCategoria").val(aData.nCategoria_id);
		},
	});
	
	var successCategoria = function(){
		$.unblockUI({
		    onUnblock: function(){
				$("#CategoriaForm").reset();
				TableCategorias.fnReloadAjax()
			}
		});
	}

	$('#modalCategoria').on('hidden.bs.modal', function(){		
		$("#CategoriaForm").reset();
		$('#modalCategoria').modal('hide');
		$("#btn-reg-categoria").show();
		$("#btn-editar-categoria").hide();
	});

	RowCBFCategorias = function(nRow, aData, iDisplayIndex){
		Actions.RowCBFunction(nRow, aData, iDisplayIndex);
	};

	$('.btn-editar').click(function(e){
		e.preventDefault();
		$('#modalEditarDatos').modal('show');
	});

	//mostrar Buscar Cliente------------------------------------>
	$('#btn-reg').click(function(e){
		e.preventDefault();
		$('#modalCategoria').modal('show');
	});

	$("#btn-reg-categoria").click(function(event){
		event.preventDefault();
		if($("#CategoriaForm").validationEngine('validate'))
			$.blockUI({ 
				onBlock: function()
				{
					$('#modalCategoria').modal('hide');
					enviar($("#CategoriaForm").attr("action-1"),{formulario:$("#CategoriaForm").serializeObject()}, successCategoria, null)
				}
			});
	});
	$("#btn-editar-categoria").click(function(event){
		event.preventDefault();
		if($("#CategoriaForm").validationEngine('validate'))
			$.blockUI({ 
				onBlock: function()
				{
					$('#modalCategoria').modal('hide');
					enviar($("#CategoriaForm").attr("action-2"),{formulario:$("#CategoriaForm").serializeObject()}, successCategoria, null)
				}
			});
	});

	var CategoriaOptions = {
		"aoColumns":[
			{ "mDataProp": "cCategoriaNom"},
		    { "mDataProp": "cCategoriaDesc"},
		    { "mDataProp": "estadolabel"}
		              ],
		"fnCreatedRow": Actions.RowCBFunction
	};
	var TableCategorias = createDataTable2('categorias_table',CategoriaOptions);
});