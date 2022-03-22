<?php

include '../conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];

$consulta = "INSERT INTO `CYF` VALUES('".$id."', '".$nombre."', '".$precio."', '".$marca."')";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>