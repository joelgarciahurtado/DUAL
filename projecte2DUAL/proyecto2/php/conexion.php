<?php

try{

	$hostname = "172.17.0.1";
	$username = "root";
	$pw ="root";
	$pdo = new PDO("mysql:host=$hostname;dbname=reserva_de_entrades", $username, $pw);


} catch(PDOexception $e){
	echo "error " . $e->getMessage() . "\n";
	exit; 
}
?>