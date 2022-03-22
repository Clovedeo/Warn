<?php
	$conexion = mysqli_connect('localhost', 'id13094350_clovedeo', 'qpdbL240qpdb/', 'id13094350_database');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla Calzado</title>
</head>
<body background="fondo.png">
	<center>
		<table border="1" bgcolor="#000000">
			<tr bgcolor="#BC0139">
				<td>ID</td>
				<td>Tipo</td>
				<td>Talla</td>
				<td>Precio</td>
				<td>Marca</td>
				<td>Color</td>
			</tr>

			<?php 
				$sql = "SELECT * FROM `CALZADO`";
				$result = mysqli_query($conexion, $sql);
				while($mostrar = mysqli_fetch_array($result)){
			?>

			<tr bgcolor="#ffffff">
				<td><?php echo $mostrar['id'] ?></td>
				<td><?php echo $mostrar['tipo'] ?></td>
				<td><?php echo $mostrar['talla'] ?></td>
				<td>$<?php echo $mostrar['precio'] ?></td>
				<td><?php echo $mostrar['marca'] ?></td>
				<td><?php echo $mostrar['color'] ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
	</center>
	<br>
</body>
</html>