<?php
$dsn = 'mysql:dbname=bd_ika;host=localhost'; //MODIFICAR EL "bd_ika" POR UNO ACTUAL 
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