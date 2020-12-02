<?php

try{

	$hostname = "mysql";
	$username = "root";
	$pw ="root";
	$pdo = new PDO("mysql:host=$hostname;dbname=world;charset=utf8", $username, $pw);


} catch(PDOexception $e){
	echo "error " . $e->getMessage() . "\n";
	exit; 
}
?>