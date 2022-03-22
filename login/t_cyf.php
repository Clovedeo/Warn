<?php
	
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../index.php");
	}

	include 'conexion.php';
	$articulos = "SELECT * FROM cyf";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/cyf.css">
	<title>Cremas y Fragancias</title>
	<link rel="shortcut icon" href="img/favicon.png">
</head>
<body bgcolor="#7C7574">

	<div align="center" id="header">
		<ul class="menu">
			<li><a href="home.php">Inicio</a></li>
			<li><a href="t_byc.php">Bolsas y Carteras</a></li>
			<li><a href="t_calzado.php">Calzado</a></li>
			<li><a href="#">Cremas y Fragancias</a></li>
			<li><a href="t_joyeria.php">Joyería</a></li>
			<li><a href="t_otros.php">Otros</a></li>
			<li><a href="t_prendas.php">Prendas</a></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>
	</div>

	<div class="container_table">
		
		<div class="table_title">Artículos</div>

		<div class="table_header">Nombre</div>
		<div class="table_header">Precio</div>
		<div class="table_header">Marca</div>
		<div class="table_header">Eliminar</div>

		<?php
			$resultado = mysqli_query($conexion, $articulos);
			while ($row = mysqli_fetch_assoc($resultado)) {
		?>

		<div class="table_item"><?php echo ucfirst(strtolower($row["NOMBREF"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["PRECIO"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["MARCA"])) ?></div>

		<div class="table_item">
			<a href="eliminar/eliminar_cyf.php?id=<?php echo $row["id"] ?>" class="table_item_link">
				<img src="img/delete.png" class="delete_img">
			</a>
		</div>

		<?php
			}
			mysqli_free_result($resultado);
		?>
	</div>

	<div class="container_add">
		<h2 class="container_title">Agregar Artículos</h2>
		<form action="insertar/insertar_cyf.php" method="post" class="container_form">

			<label class="container_label">Nombre: </label>
			<input type="text" name="nombre" class="container_input" required>
			
			<label class="container_label">Precio: </label>
			<input type="number" name="precio" class="container_input" required>
			
			<label class="container_label">Marca: </label>
			<input type="text" name="marca" class="container_input" required>

			<input class="container_sumbit" type="submit" value="Agregar">

		</form>
	</div>

	<script src="eliminar/confirmacion.js"></script>

</body>
</html>