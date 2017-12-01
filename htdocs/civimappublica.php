<?php 


	header("Access-Control-Allow-Origin:http://especialistasenlaweb.com");


	$suceso_titulo=$_POST['suceso_titulo'];

	$suceso_descripcion=$_POST['suceso_descripcion'];

	$suceso_ubicacion=$_POST['suceso_ubicacion'];

	// Conecta a la base de datos
	$conectar=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");

	// Hace la consulta
	$consulta="INSERT into sucesos(suceso_titulo,suceso_descripcion,suceso_ubicacion) values('$suceso_titulo','$suceso_descripcion','$suceso_ubicacion')";

	$conectar->query($consulta)or die(mysqli_error());

	echo "<h2>Suceso registrado</h2>";



 ?>