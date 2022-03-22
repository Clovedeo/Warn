<?php

$hostname = 'localhost';
$username = 'id16696807_luisalejandro';
$password = 'Manuhanddelnorte71198$';
$database = 'id16696807_warn';

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion -> connect_errno) {
	echo "No se ha podido establecer conexión";
}

?>