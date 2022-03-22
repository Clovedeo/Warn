<?php
	
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion='') {
		header("Location: ./../index.php");
	}

	include 'conexion.php';
	$articulos = "SELECT * FROM calzado";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" type="text/css" href="css/calzado.css">
	<title>Calzado</title>
	<link rel="shortcut icon" href="img/favicon.png">
</head>
<body bgcolor="#7C7574">

	<div align="center" id="header">
		<ul class="menu">
			<li><a href="home.php">Inicio</a></li>
			<li><a href="t_byc.php">Bolsas y Carteras</a></li>
			<li><a href="#">Calzado</a></li>
			<li><a href="t_cyf.php">Cremas y Fragancias</a></li>
			<li><a href="t_joyeria.php">Joyería</a></li>
			<li><a href="t_otros.php">Otros</a></li>
			<li><a href="t_prendas.php">Prendas</a></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>
	</div>

	<div class="container_table">
		
		<div class="table_title">Artículos</div>

		<div class="table_header">Tipo</div>
		<div class="table_header">Talla</div>
		<div class="table_header">Precio</div>
		<div class="table_header">Marca</div>
		<div class="table_header">Color</div>
		<div class="table_header">Eliminar</div>

		<?php
			$resultado = mysqli_query($conexion, $articulos);
			while ($row = mysqli_fetch_assoc($resultado)) {
		?>

		<div class="table_item"><?php echo ucfirst(strtolower($row["tipo"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["talla"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["precio"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["marca"])) ?></div>
		<div class="table_item"><?php echo ucfirst(strtolower($row["color"])) ?></div>

		<div class="table_item">
			<a href="eliminar/eliminar_calzado.php?id=<?php echo $row["id"] ?>" class="table_item_link">
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
		<form action="insertar/insertar_calzado.php" method="post" class="container_form">

			<label class="container_label">Tipo: </label>
			<input type="text" name="tipo" class="container_input" required>

			<label class="container_label">Talla: </label>
			<input type="number" name="talla" class="container_input" required>
			
			<label class="container_label">Precio: </label>
			<input type="number" name="precio" class="container_input" required>
			
			<label class="container_label">Marca: </label>
			<input type="text" name="marca" class="container_input" required>

			<label class="container_label">Color: </label>
			<input type="text" name="color" class="container_input" required>

			<input class="container_sumbit" type="submit" value="Agregar">

		</form>
	</div>

	<script src="eliminar/confirmacion.js"></script>

</body>
</html>