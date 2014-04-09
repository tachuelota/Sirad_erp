$(document).ready(function(){

	var urlExportXLS = base_url +"assets/extensiones/reportes_xls/formato_reporte_prodminStock.php"

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

		$("#pdfgen").click(function(){

	//ClientesRowCBF = function (){
		table_productos = toHTML(crearTablaToArray("tclientes",
				['Codigo de Barra','Producto','Unidad Medida','Stock Actual','Stock Minimo','Stock Maximo'],
				[	'style="width: 5%;" class="head" ','style="width: 25%;" class="head" ','style="width: 15%;" class="head" ',
					'style="width: 15%;" class="head" ','style="width: 15%;" class="head" ','style="width: 25%;" class="head" ',],
				['CodBarra','Producto','UnidMedida','Stock_Actual','Stock_Minimo','Stock_Maximo'],
				[	'style="width: 5%;" ','style="width: 25%;" ','style="width: 15%;" ',
					'style="width: 15%;" ','style="width: 15%;" ','style="width: 25%;" '],
					ProductosTable.fnGetData()));
		//};
		$("#title").val("LISTA DE PRODUCTOS CON MÍNIMO DE STOCK");
		$("#table_productos").val(table_productos);
		$("#exportmodal").modal('show');	
		console.log(table_productos);
	});


	$("#xlsutton").click(function(e){
		e.preventDefault();
		$("#CreatePDFForm").attr("action",urlExportXLS);
		$("#CreatePDFForm").submit();
		$("#exportmodal").modal('hide');
	});



});
