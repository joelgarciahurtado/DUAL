<?php

include_once __DIR__."/php/conexion.php";

session_start();

if (isset($_POST['modificacio'])) {

    $pais = ($_POST['pais']);

    echo($pais); 

}



$consulta = "SELECT * FROM country, countrylanguage WHERE country.Name='$pais' AND country.Code=countrylanguage.CountryCode";

    $query = $pdo->prepare($consulta);

    $query->execute();

    $row = $query->fetch();



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
				<h4>MODIFICA DADES</h4>
			  <div class="row">
			    <div class="col">
<?php

include_once __DIR__."/menu.php";


?>
                <p>Selecciona un país: </p>
                
                <select>
<?php
                foreach ( $row as $key) {
                    echo "<option>". "poblacio: ". $row[6]." - " . "idioma: ". $row[16]." - "."percentatge del idioma parlat: ". $row[18] . "</option><br/>";
                    $row = $query->fetch();
                }


?>

                </select>

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