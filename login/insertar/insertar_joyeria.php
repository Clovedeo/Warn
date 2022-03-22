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
	$sexo = $_POST['sexo'];
	$material = $_POST['material'];
	$medida = $_POST['medida'];

	$insertar = "INSERT INTO joyeria (TIPO, precio, SEXO, MATERIAL, MEDIDA) VALUES('$tipo', '$precio', '$sexo', '$material', '$medida')";

	$adicion = mysqli_query($conexion, $insertar);

	if ($adicion) {
		echo "<script>alert('Se ha registrado el artículo con éxito'); window.location='./../t_joyeria.php'</script>";
	} else {
		echo "<script>
		alert('No se pudo insertar'); 
		window.history.go(-1);
		</script>";
	}

?>