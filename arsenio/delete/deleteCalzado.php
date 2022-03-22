<?php

include '../conexion.php';

$id = $_POST['id'];

$consulta = "DELETE FROM `CALZADO` WHERE id = '".$id."'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

?>