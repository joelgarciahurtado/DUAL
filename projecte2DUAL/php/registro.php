<?php


//conexion a la base de datos usando conexion.php

	include_once __DIR__."/conexion.php";

// Encriptar contrasenya MD5

$_POST['contrasenya']="'".md5($_POST['contrasenya'])."'";


// insertar usuario

	//query



	$query = "INSERT INTO Usuaris (Nom_Usuari, Cognom1, Cognom2, Direccio, CP, Telefon, Mobil, Password, Poblacio, Data_Naixement, Email) VALUES ('".$_POST['nom']."','".$_POST['cognom1']."','".$_POST['cognom2']."','". $_POST['adrecapostal']."',".$_POST['codipostal'].",".$_POST['telefon'].",". $_POST['mobil']."," . $_POST['contrasenya'].",'". $_POST['poblacio']."','". $_POST['datadenaixement']."','". $_POST['email']."')";
	

	
	//sql pdo prepare
	echo($query);
	
	$sql = $pdo->prepare($query);

	$sql->execute(); 

	//sql execute



//getData


//redirigir al index.html












  ?>