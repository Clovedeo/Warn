<?php

include '../conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$consulta = "INSERT INTO `OTROS` VALUES('".$id."', '".$nombre."', '".$precio."')";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>