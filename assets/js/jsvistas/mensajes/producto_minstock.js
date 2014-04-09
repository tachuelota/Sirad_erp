$(document).ready(function(){
	var SelectProductoData = new Array();
	var ProdOptions = {
		"aoColumns":[
		              {"mDataProp": "CodBarra"},
		              {"mDataProp": "Producto"},
		              {"mDataProp": "UnidMedida"},
		              {"mDataProp": "Stock_Actual"},
		              {"mDataProp": "Stock_Minimo"},
		              {"mDataProp": "Stock_Maximo"}
		            ],
		"fnCreatedRow":getSimpleSelectRowCallBack(SelectProductoData)
	};
	ProductosTable = createDataTable2('select_producto_table',ProdOptions);


	$('#select_producto').click(function(event){
		event.preventDefault();
		$("#producto_id").val(SelectProductoData[0].nProducto_id);
		$('#producto').val(SelectProductoData[0].cProductoDesc);
		$('#modalBuscarProducto').modal('hide');
	});



});
