<?php

include_once __DIR__."/php/conexion.php";

session_start();


include_once __DIR__."/php/queryinicisessio.php";

?>


<!DOCTYPE html>
<html lang="ca">
<head>
	<title>Venda de Entrades</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<?php

		include_once __DIR__."/header.php";

		//Hacer un select a la bd de todos los espectaculos

		$consulta2 = "SELECT distinct * FROM Espectacles ORDER BY Data";

		$espectacles = $pdo->prepare($consulta2);

		$espectacles->execute();	

		$result = $espectacles->fetchAll();


	?>


	<div class="container">
		<div class="row">

			<div class="col-xl-9" id="bodyinici">
				<h4>Esdeveniments a la venda</h4>
				<div class="row">
			 
				<?php

					$printevents = "";
					$numEspectacle = 1;				
					

					for($i = 0; $i<2; $i++){
						$printevents .= "<div class='col-xl-6'>
							<p>Titol: " . $result[$i]['Nom_Espectacle'] . "</p>
							<a href='event.php?id=".$result[$i]['ID_Espectacle']."'>
								<img src='" . $result[$i]['Foto'] . "'class='img-fluid'>
							</a>
						</div>";
					}



					$tamanyrestant = sizeof($result);
					//aixó fa que el següent bucle, sigui de la llargaria de el rest dels events per imprimir.


					for($i = 2;$i<$tamanyrestant; $i++){
						$printevents .= "<div class='col-xl-4'>
							<p>Titol: " . $result[$i]['Nom_Espectacle'] . "</p>
							<a href='event.php?id=".$result[$i]['ID_Espectacle']."'> 
								<img src='" . $result[$i]['Foto'] . "'class='img-fluid'>
								<p></p>
							</a>
						</div>";
					}


					echo $printevents;

				?>
				
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



	<?php

		include_once __DIR__."/footer.php";

	?>



		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
</body>
</html>