<?php
include 'conexion.php';

$correo = $_POST['correo'];
$pw = $_POST['pw'];

$sentencia = $conexion -> prepare("SELECT * FROM usuarios WHERE correo=? AND pw=?");
$sentencia->bind_param('ss',$correo,$pw);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
	echo json_encode($fila, JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$conexion->close();
?>