<?php
	
	session_start();
	//error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../../index.php");
	}
	
	include '../conexion.php';

	$tipo = $_POST['tipo'];
	$talla = $_POST['talla'];
	$precio = $_POST['precio'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];

	$insertar = "INSERT INTO prendas (TIPO, TALLA, PRECIO, MARCA, COLOR) VALUES('$tipo', '$talla', '$precio', '$marca', '$color')";

	$adicion = mysqli_query($conexion, $insertar);

	if ($adicion) {
		echo "<script>alert('Se ha registrado el artículo con éxito'); window.location='./../t_prendas.php'</script>";
	} else {
		echo "<script>
		alert('No se pudo insertar'); 
		window.history.go(-1);
		</script>";
	}

?>