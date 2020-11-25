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
	<title>Modifica el teu perfil</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    

  <?php

  include_once __DIR__."/header.php";

  ?>


<div class="container">
  <div class="row">

    <div class="col-xl-9" id="bodymodificacioperfil">
      <section>
        <article>
          <h4>Modifica el teu perfil</h4>

        <div class="container">
          

          <form>

            <div class="row m-3">
              <div class="col-xl-4">
                <input type="text" name="nom" placeholder="Nom*" required>
              </div>
              <div class="col-xl-4">
                <input type="text" name="cognom1" placeholder="Primer Cognom*" required>
              </div>
              <div class="col-xl-4">
                <input type="text" name="cognom2" placeholder="Segón Cognom*" required>
              </div>
           </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="text" name="adrecapostal" placeholder="Adreça postal">
            </div>
            <div class="col-xl-4">
             <input type="text" name="poblacio" placeholder="Població">
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="text" name="codipostal" placeholder="Codi postal">
            </div>
            <div class="col-xl-4">
             <input type="tel" name="mobil" placeholder="Telèfon mòbil">
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="tel" name="telefon" placeholder="Telèfon fix">
            </div>
            <div class="col-xl-4" id="datanaixementbox">
              <input type="date" name="datadenaixement">
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="email" id="email" name="email" placeholder="Correu electrònic*" required onkeyup='check();'>
            </div>
            <div class="col-xl-4">
              <input type="email" id="emailconfirm" name="emailconfirm" placeholder="Repetir correu electrònic*" required onkeyup='check();'>
            </div>
            <div class="col-xl-4">
              <span id="menssatge"></span>
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-12">
              <input type="checkbox" name="proteccio" required> Protecció de dades*:
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-12">
            <p>Els camps amb asterisc són obligatoris(*)</p>
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-12">
            <input type="submit" value="Enviar">
            </div>
          </div>
          
          </form>
        </div>

        </article>
      </section>
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
<script src="scripts.js"></script>
</body>
</html>