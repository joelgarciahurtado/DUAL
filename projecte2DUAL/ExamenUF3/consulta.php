<?php

include_once __DIR__."/php/conexion.php";

session_start();


$consulta = "SELECT DISTINCT language FROM countrylanguage, country, city  WHERE city.CountryCode=country.code AND country.Code=countrylanguage.CountryCode AND country.capital=city.ID";

$query = $pdo->prepare($consulta);

$query->execute();


$row = $query->fetchAll();
var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="ca">
<head>
	<title>Modificació de dades</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
		<div class="row">

			<div class="col-xl-9" id="bodyinici">
				<h4>Consulta dades</h4>
			  <div class="row">
			    <div class="col">
                <?php

include_once __DIR__."/menu.php";

?>

				<form method="GET" action="consulta.php">
                <select id='lang'>
<?php 
                foreach ( $row as $key) {
					
					echo "<option value=" . $key['language'] . ">" . $key['language'] . "</option>";

				}
				
?>
                </select>
				<input type="submit" name="login" value="Enviar">
				</form>




			    </div>
			    <div class="col">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col">
			    </div>
			    <div class="col">
			    </div>
			    <div class="col">
			    </div>
			  </div>
			</div>





		</div>





	</div>


</html>