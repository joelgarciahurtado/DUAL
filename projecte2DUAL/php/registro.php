<?php


//conexion a la base de datos usando conexion.php

	include_once __DIR__."/conexion.php";

// Encriptar contrasenya MD5

$_POST['contrasenya']="'".md5($_POST['contrasenya'])."'";

echo $_POST['contrasenya'];

// insertar usuario

	//query



	$query = "INSERT INTO Usuaris (Nom_Usuari, Cognom1, Cognom2, Direccio, CP, Telefon, Mobil, Password, Poblacio, Data_Naixement, email) VALUES ('".$_POST['nom']."','".$_POST['cognom1']."','".$_POST['cognom2']."','". $_POST['adrecapostal']."',".$_POST['codipostal'].",".$_POST['telefon'].",". $_POST['mobil']."," . $_POST['contrasenya'].",'". $_POST['poblacio']."','". $_POST['datadenaixement']."','". $_POST['email']."')";
	echo $query;
	

	
	//sql pdo prepare

	sql 

	//sql execute



//getData


//redirigir al index.html












  ?>