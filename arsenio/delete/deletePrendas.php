<?php

include '../conexion.php';

$id = $_POST['id'];

$consulta = "DELETE FROM `PRENDAS` WHERE id = '".$id."'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>