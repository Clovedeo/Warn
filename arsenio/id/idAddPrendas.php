<?php

include '../conexion.php';

$consulta = "SELECT id FROM `PRENDAS` ORDER BY id DESC LIMIT 1";

$resultado = $conexion ->query($consulta);

while ($fila=$resultado -> fetch_array()) {
	$id []= array_map("utf8_encode", $fila);
}
echo json_encode($id);

$resultado -> close();

?>