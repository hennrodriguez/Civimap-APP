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
		console.info("Suceso registrado");
		$(".mensaje").html(respuesta);
	});
});

$.ajax({
	url:"http://especialistasenlaweb.com/civimap_muestra.php",
}).done(function(respuesta){
	$("#sucesos_bd").html(respuesta);
});

// $(".mdl-card__suceso").on('click',function(){
// 	alert(this.id);
// 	// var id = $(this).attr('id');
// 	// console.info(id);
// });