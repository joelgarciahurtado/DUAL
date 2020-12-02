<?php


//conexion a la base de datos usando conexion.php

	include_once __DIR__."/conexion.php";

// Encriptar contrasenya MD5

$_POST['contrasenya']="'".md5($_POST['contrasenya'])."'";


// insertar usuario

	//query



	$query = "INSERT INTO alumnes (nom, cognoms, dni, telefon_fix, telefon_mobil, direccio, poblacio, cp, data_naixement) VALUES ('".$_POST['nom']."','".$_POST['cognoms']."','".$_POST['dni']."',". $_POST['telefon_fix'].",".$_POST['telefon_mobil'].",'".$_POST['direccio']."','". $_POST['poblacio']."'," . $_POST['cp'].",'". $_POST['data_naixement']."')";
	

	
	//sql pdo prepare
	echo($query);
	
	$sql = $pdo->prepare($query);

	$sql->execute(); 

	//sql execute



//getData


//redirigir al index.html




echo"<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../index.php'>";







  ?>