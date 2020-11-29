<?php

include_once __DIR__."/php/conexion.php";

session_start();


$consulta = "SELECT * FROM assignatures,UFs WHERE assignatures.id_assignatura=UFs.id_assignatura";

$query = $pdo->prepare($consulta);

$query->execute();


$row = $query->fetch();

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


                <select>
<?php
                foreach ( $row as $key) {
                    echo "<option>" . $row[1]." - " . $row[2]." - " . $row[11] . "</option><br/>";
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
