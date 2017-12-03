<?php
	header("Access-Control-Allow-Origin:*");
	$conectar=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");

	// Check connection
	if ($conectar->connect_error) {
		die("Connection failed: " . $conectar->connect_error);
	}

	$sql = "SELECT id, suceso_titulo, suceso_descripcion, suceso_ubicacion FROM sucesos";
	$result = $conectar->query($sql);

	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<a href='suceso.html' class='mdl-card mdl-shadow--2dp suceso-id__" . $row["id"]. "' id='" . $row["id"]. "'>
			<div class='mdl-card__title'>
				<h2 class='mdl-card__title-text'>" . $row["suceso_titulo"]. "</h2>
				<span class='mdl-chip pull-right'>
					<i class='mdl-chip__icon material-icons'>schedule</i>
					<span class='mdl-chip__text'>24 min</span>
				</span>
			</div>
			<div class='mdl-card__ubicacion'>
				<i class='mdl-ubicacion__icon material-icons'>room</i>" . $row["suceso_ubicacion"] . " - <span class='distancia'>26m</span>
			</div>
			<div class='mdl-card__descripcion'>
				" . $row["suceso_descripcion"]. "
			</div>
		</a>";
    	}
	} else {
		echo "No hay actualizaciones.";
	}
	
	$conectar->close();

 ?>