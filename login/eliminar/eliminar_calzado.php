<?php

	session_start();
	//error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../../index.php");
	} else {
	
		include '../conexion.php';

		$id = $_GET['id'];

		$eliminar = "DELETE FROM calzado WHERE id = '$id'";

		$resultado = mysqli_query($conexion, $eliminar);

		if ($resultado) {
			header("Location: ./../t_calzado.php");
		} else {
			echo "<script>
			alert('No se pudo eliminar'); 
			window.history.go(-1);
			</script>";
		}
	}

?>