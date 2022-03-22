<?php
	
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../index.php");
	}

	include 'conexion.php';
	$articulos = "SELECT * FROM joyeria";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/calzado.css">
	<title>Joyería</title>
	<link rel="shortcut icon" href="img/favicon.png">
</head>
<body bgcolor="#7C7574">

	<div align="center" id="header">
		<ul class="menu">
			<li><a href="home.php">Inicio</a></li>
			<li><a href="t_byc.php">Bolsas y Carteras</a></li>
			<li><a href="t_calzado.php">Calzado</a></li>
			<li><a href="t_cyf.php">Cremas y Fragancias</a></li>
			<li><a href="#">Joyería</a></li>
			<li><a href="t_otros.php">Otros</a></li>
			<li><a href="t_prendas.php">Prendas</a></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>
	</div>

	<div class="container_table">
		
		<div class="table_title">Artículos</div>

		<div class="table_header">Tipo</div>
		<div class="table_header">Precio</div>
		<div class="table_header">Sexo</div>
		<div class="table_header">Material</div>
		<div class="table_header">Medida</div>
		<div class="table_header">Eliminar</div>

		<?php
			$resultado = mysqli_query($conexion, $articulos);
			while ($row = mysqli_fetch_assoc($resultado)) {
		?>

		<div class="table_item"><?php echo ucfirst(strtolower($row["TIPO"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["precio"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["SEXO"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["MATERIAL"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["MEDIDA"])) ?></div>

		<div class="table_item">
			<a href="eliminar/eliminar_joyeria.php?id=<?php echo $row["id"] ?>" class="table_item_link">
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
		<form action="insertar/insertar_joyeria.php" method="post" class="container_form">

			<label class="container_label">Tipo: </label>
			<input type="text" name="tipo" class="container_input" required>
			
			<label class="container_label">Precio: </label>
			<input type="number" name="precio" class="container_input" required>

			<label class="container_label">Sexo: </label>
			<input type="text" name="sexo" class="container_input" required>
			
			<label class="container_label">Material: </label>
			<input type="text" name="material" class="container_input" required>

			<label class="container_label">Medida: </label>
			<input type="number" name="medida" class="container_input" required>

			<input class="container_sumbit" type="submit" value="Agregar">

		</form>
	</div>

	<script src="eliminar/confirmacion.js"></script>

</body>
</html>