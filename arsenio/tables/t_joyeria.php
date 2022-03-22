<?php
	$conexion = mysqli_connect('localhost', 'id13094350_clovedeo', 'qpdbL240qpdb/', 'id13094350_database');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla Joyeria</title>
</head>
<body background="fondo.png">
	<center>
		<table border="1" bgcolor="#000000">
			<tr bgcolor="#BC0139">
				<td>ID</td>
				<td>Tipo</td>
				<td>Precio</td>
				<td>Sexo</td>
				<td>Material</td>
				<td>Medida</td>
			</tr>

			<?php 
				$sql = "SELECT * FROM `JOYERIA`";
				$result = mysqli_query($conexion, $sql);
				while($mostrar = mysqli_fetch_array($result)){
			?>

			<tr bgcolor="#ffffff">
				<td><?php echo $mostrar['id'] ?></td>
				<td><?php echo $mostrar['TIPO'] ?></td>
				<td>$<?php echo $mostrar['precio'] ?></td>
				<td><?php echo $mostrar['SEXO'] ?></td>
				<td><?php echo $mostrar['MATERIAL'] ?></td>
				<td><?php echo $mostrar['MEDIDA'] ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
	</center>
	<br>
</body>
</html>