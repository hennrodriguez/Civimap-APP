<?php 


	header("Access-Control-Allow-Origin:http://especialistasenlaweb.com");


	$suceso_titulo=$_POST['suceso_titulo'];

	$suceso_descripcion=$_POST['suceso_descripcion'];

	$suceso_ubicacion=$_POST['suceso_ubicacion'];

	$suceso_vistas=rand(114,343);

	$suceso_status=$_POST['suceso_status'];



	// Conecta a la base de datos
	$conectar=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");

	// Hace la consulta
	$consulta="INSERT into sucesos(suceso_titulo,suceso_descripcion,suceso_ubicacion,suceso_vistas,suceso_status) values('$suceso_titulo','$suceso_descripcion','$suceso_ubicacion','$suceso_vistas','$suceso_status')";

	$conectar->query($consulta)or die(mysqli_error());

	echo "<h4>Suceso registrado</h4>";



 ?>