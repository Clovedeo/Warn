<?php

include '../conexion.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$sexo = $_POST['sexo'];
$material = $_POST['material'];
$medida = $_POST['medida'];

$consulta = "INSERT INTO `JOYERIA` VALUES('".$id."', '".$tipo."', '".$precio."', '".$sexo."', '".$material."', '".$medida."')";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>