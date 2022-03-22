<?php
	
	session_start();
	//error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../../index.php");
	}
	
	include '../conexion.php';

	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];

	$insertar = "INSERT INTO otros (NOMBRE, PRECIO) VALUES('$nombre', '$precio')";

	$adicion = mysqli_query($conexion, $insertar);

	if ($adicion) {
		echo "<script>alert('Se ha registrado el artículo con éxito'); window.location='./../t_otros.php'</script>";
	} else {
		echo "<script>
		alert('No se pudo insertar'); 
		window.history.go(-1);
		</script>";
	}

?>