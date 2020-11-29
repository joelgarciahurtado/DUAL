<?php

include_once __DIR__."/php/conexion.php";

session_start();

	if (isset($_POST['login'])) {

		$user = $_POST['user'];

		$password = md5($_POST['password']);

		$consulta = "SELECT * FROM Usuaris WHERE Nom_Usuari ='$user' and Password = '$password'";

		$query = $pdo->prepare($consulta);

		$query->execute();

		$result = $query->fetch(PDO::FETCH_ASSOC);

		$_SESSION=$result;

		if ($result == null) {
        echo '<p>nom de usuari o contrasenya incorrectes</p>';
    } else {
    	if ($password == $result['Password']) {
    		$_SESSION['user_id'] = $result['ID_Usuari'];
			$_SESSION['logged']=TRUE;
    	} else {
    		echo '<p>nom de usuari o contrasenya incorrectes</p>';
    	}
	} 

}

?>

<!DOCTYPE html>
<html lang="ca">
<head>
	<title>Inici de Sessió</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>


<div class="container">
		<div class="row">

			<div class="col-xl-9" id="bodyinici">
				<h4>Institut</h4>
			  <div class="row">
			    <div class="col">
			      <img src="img/foto1.png" alt="foto1" width="400px">
			    </div>
			    <div class="col">
                <img src="img/foto2.png" alt="foto2"  width="400px">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col">
                <img src="img/foto3.png" alt="foto3"  width="400px">
			    </div>
			    <div class="col">
                <img src="img/foto4.jpg" alt="foto4"  width="400px">
			    </div>
			    <div class="col">
                <img src="img/foto5.png" alt="foto5"  width="400px">
			    </div>
			  </div>
			</div>


		<?php

			if ($_SESSION['logged']) {

				include_once __DIR__."/loggejat.php";

			} else {
				include_once __DIR__."/inicisessio.php";
			}

		?>


		</div>

	</div>


</html>