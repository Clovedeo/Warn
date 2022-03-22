<?php

	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../index.php");
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<title>Inicio</title>
	<link rel="shortcut icon" href="img/favicon.png">
</head>
<body background="img/linea.jpg">
	
	<div align="center" id="header">
		<ul class="menu">
			<li><a href="#">Inicio</a></li>
			<li><a href="t_byc.php">Bolsas y Carteras</a></li>
			<li><a href="t_calzado.php">Calzado</a></li>
			<li><a href="t_cyf.php">Cremas y Fragancias</a></li>
			<li><a href="t_joyeria.php">Joyería</a></li>
			<li><a href="t_otros.php">Otros</a></li>
			<li><a href="t_prendas.php">Prendas</a></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>
	</div>

	<div align="center">
		<img src="img/logo.png" class="logo">
	</div>

</body>
</html>