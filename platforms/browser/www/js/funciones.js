$(document).ready(function(){
	console.info("JS Funciona");
});
$("#suceso_nuevo").submit(function(evento){
	evento.preventDefault();
	console.info("Activando formulario...");
	var cadena=$(this).serializeArray();
	console.info(cadena);
	$.ajax({
		url:"http://especialistasenlaweb.com/civimap_publica.php",
		type: "post",
		data: cadena
	}).done(function(respuesta){
		console.info("datos enviados");
		$(".mensaje").html(respuesta);
	});
});