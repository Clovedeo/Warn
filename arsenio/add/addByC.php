<?php

include '../conexion.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$color = $_POST['color'];

$consulta = "INSERT INTO `BYC` VALUES('".$id."', '".$tipo."', '".$precio."', '".$marca."', '".$color."')";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>