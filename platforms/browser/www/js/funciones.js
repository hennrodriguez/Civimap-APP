$(document).ready(function(){
	console.info("JS 10:50");
});

$("#miformulario").submit(function(evento){
	evento.preventDefault();
	console.info("Activando formulario...");
	var cadena=$(this).serializeArray();
	console.info(cadena);
	$.ajax({
		url:"http://especialistasenlaweb.com/civimappublica.php",
		type: "post",
		data: cadena
	}).done(function(respuesta){
		console.info("Suceso registrado");
		$(".mensaje").html(respuesta);
	});
});