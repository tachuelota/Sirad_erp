$(document).ready(function(){

	$("#imprimir").click(function(e){
		e.preventDefault();
		$("#resumen_venta").printThis({
        	importCSS: true
         });
	});

	$('#btn_enviar_correo').click(function(event){
		event.preventDefault();
		$("#compose-modal").modal('hide');	
		enviar($("#EnviarForm").attr("action-1"), null)
	});	
});