<?php

include_once __DIR__."/php/conexion.php";

session_start();

if (isset($_POST['modificacio'])) {

    $regio = ($_POST['regio']);

    echo($regio);

    $consulta2 = "SELECT * FROM country WHERE Region=$regio";

    $query2 = $pdo->prepare($consulta2);

    $query2->execute();

    $row2 = $query2->fetch();    

   

}



$consulta = "SELECT * FROM country";

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
                <p>Selecciona una regió: </p>
                
                <select>
<?php
                foreach ( $row as $key) {
                    echo "<option>". $row[3]."</option><br/>";
                    $row = $query->fetch();
                }


?>

                </select>
                <form method="POST" action="modifica2.php" name="modificaform">
                <p>Escriu el nom de la regió que vols modificar</p>
                <input type="text" name="regio">
                <input type="submit" name="modificacio" value="Enviar">
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