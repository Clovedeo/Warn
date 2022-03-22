<?php
	$conexion = mysqli_connect('localhost', 'id13094350_clovedeo', 'qpdbL240qpdb/', 'id13094350_database');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla CyF</title>
</head>
<body background="fondo.png">
	<center>
		<table border="1" bgcolor="#000000">
			<tr bgcolor="#BC0139">
				<td>ID</td>
				<td>Tipo</td>
				<td>Precio</td>
				<td>Marca</td>
			</tr>

			<?php 
				$sql = "SELECT * FROM `CYF`";
				$result = mysqli_query($conexion, $sql);
				while($mostrar = mysqli_fetch_array($result)){
			?>

			<tr bgcolor="#ffffff">
				<td><?php echo $mostrar['id'] ?></td>
				<td><?php echo $mostrar['NOMBREF'] ?></td>
				<td>$<?php echo $mostrar['PRECIO'] ?></td>
				<td><?php echo $mostrar['MARCA'] ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
	</center>
	<br>
</body>
</html>