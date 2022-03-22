<?php

	$usuario = $_POST['usuario'];
	$contra = $_POST['contra'];

	session_start();
	$_SESSION['usuario']= $usuario;

	include 'login/conexion.php';

	$consulta = "SELECT * FROM usuarios WHERE correo = '$usuario' AND pw = '$contra'";

	$resultado = mysqli_query($conexion, $consulta);

	$filas = mysqli_num_rows($resultado);

	if ($filas) {
		header("Location: login/home.php");
	} else {
		include('index.php');
		?>
		<h1 class="bad">Error en la autentificación</h1>
		<?php 
		session_destroy();
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>