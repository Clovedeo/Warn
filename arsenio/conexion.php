<?php

$hostname = 'localhost';
$username = 'id13094350_clovedeo';
$password = 'qpdbL240qpdb/';
$database = 'id13094350_database';

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion -> connect_errno) {
	echo "No se ha podido establecer conexión";
}

?>