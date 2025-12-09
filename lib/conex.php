<?php
$dsn = 'mysql:dbname=bada_ika;host=localhost'; 
	$usuario = 'root';
	$contrasenia = '';

	try {
		$link = new PDO($dsn, $usuario, $contrasenia);
		$conexdb = "si";
	} catch (PDOException $e) {
		echo 'Falló la conexión: ' . $e->getMessage();
		$conexdb = "no";
	}
?>