<?php
	
	session_start();
	//error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../../index.php");
	}
	
	include '../conexion.php';

	$tipo = $_POST['tipo'];
	$precio = $_POST['precio'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];

	$insertar = "INSERT INTO byc (TIPO, PRECIO, MARCA, COLOR) VALUES('$tipo', '$precio', '$marca', '$color')";

	$adicion = mysqli_query($conexion, $insertar);

	if ($adicion) {
		echo "<script>alert('Se ha registrado el artículo con éxito'); window.location='./../t_byc.php'</script>";
	} else {
		echo "<script>
		alert('No se pudo insertar'); 
		window.history.go(-1);
		</script>";
	}

?>