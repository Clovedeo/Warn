<?php

include '../conexion.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$color = $_POST['color'];

$consulta = "INSERT INTO `CALZADO` VALUES('".$id."', '".$tipo."', '".$talla."', '".$precio."', '".$marca."', '".$color."')";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>