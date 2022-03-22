<?php

include '../conexion.php';

$codigo = $_GET['id'];

$consulta = "SELECT precio FROM `BYC` WHERE id = '$codigo'";
$resultado = $conexion -> query($consulta);

while ($fila = $resultado -> fetch_array()) {
	$precio[] = array_map("utf8_encode", $fila);
}

echo json_encode($precio);
$resultado -> close();

?>