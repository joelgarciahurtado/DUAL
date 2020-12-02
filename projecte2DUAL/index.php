<?php

include_once __DIR__."/php/conexion.php";

session_start();

	if (isset($_POST['login'])) {

		$email = $_POST['email'];

		$password = md5($_POST['password']);

		$consulta = "SELECT * FROM Usuaris WHERE email ='$email' and Password = '$password'";

		$query = $pdo->prepare($consulta);

		$query->execute();

		$result = $query->fetch(PDO::FETCH_ASSOC);

		if ($result == null) {
        echo '<p>email o contrasenya incorrectes</p>';
    } else {
    	if ($password == $result['Password']) {
    		$_SESSION['user_id'] = $result['ID_Usuari'];
			$_SESSION['logged']=TRUE;
    	} else {
    		echo '<p>email o contrasenya incorrectes</p>';
    	}
	} 

}

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

		$consulta2 = "SELECT * FROM Espectacles";

		$espectacles = $pdo->prepare($consulta2);

		$espectacles->execute();	


	?>


	<div class="container">
		<div class="row">

			<div class="col-xl-9" id="bodyinici">
				<h4>Esdeveniments a la venda</h4>
			 
				<?php

					$numEspectacle = 1;	
					
					foreach ($espectacles as $espectacle){
						
						if ($numEspectacle == 1 || $numEspectacle == 2){
							echo "Titol: ". $espectacle['Nom_Espectacle'];
							echo  "<img src=". $espectacle['Foto'].">";


						}
						else{






						}
						echo "</div>";






					}

				?>
				
			<!--	<div class="row">
			    <div class="col">
			      1 of 2
			    </div>
			    <div class="col">
			      2 of 2
			    </div>
			  </div>
			  <div class="row">
			    <div class="col">
			      1 of 3
			    </div>
			    <div class="col">
			      2 of 3
			    </div>
			    <div class="col">
			      3 of 3
			    </div>
			  </div>
			</div>
				-->

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