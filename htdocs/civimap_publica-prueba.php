<?php 

	echo "Civimap publica";

	header("Access-Control-Allow-Origin:http://especialistasenlaweb.com");
	
	$suceso_titulo=$_POST['suceso_titulo'];
	$suceso_descripcion=$_POST['suceso_descripcion'];
	$suceso_status=$_POST['suceso_status'];
	$suceso_visitas=rand(62,343);
	$suceso_ubicacion=$_POST['suceso_ubicacion'];

	//mysqli("servidor","usuario","contraseña","basededatos")
	$conectar=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");
	// $consulta="INSERT into sucesos(suceso_autor,suceso_timestamp,suceso_datetime,suceso_titulo,suceso_descripcion,suceso_status,suceso_imagen,suceso_visitas,suceso_ubicacion,suceso_lat,suceso_long) values('$suceso_autor','$suceso_timestamp','$suceso_datetime','$suceso_titulo','$suceso_descripcion','$suceso_status','$suceso_imagen','$suceso_visitas','$suceso_ubicacion','$suceso_lat','$suceso_long')";
	$consulta="INSERT into sucesos(suceso_titulo,suceso_descripcion,suceso_status,suceso_visitas,suceso_ubicacion) values('$suceso_titulo','$suceso_descripcion','$suceso_status','$suceso_visitas','$suceso_ubicacion')";
	$conectar->query($consulta)or die(mysqli_error());
	echo "<h2>Suceso registrado</h2>";

 ?>