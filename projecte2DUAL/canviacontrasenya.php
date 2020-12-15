<?php

include_once __DIR__."/php/conexion.php";

session_start();

if (isset($_POST['canviarcontrasenya'])) {

  $ID_Usuari = $_SESSION["user_id"];

  $password = md5($_POST['password']);
 
  $sql = "UPDATE Usuaris SET Password=? WHERE ID_Usuari=$ID_Usuari";
  $stmt= $pdo->prepare($sql);
  $stmt->bindParam(1 , $password);
  $stmt->execute();  
  echo"<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=index.php'>";
}


?>

 <!DOCTYPE html>
<html lang="ca">
<head>
	<title>Canvia de contrasenya</title>
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
      
      <div class="col-xl-9" id="bodyrecuperacio">
        <section>
          <article>
            <h4>Canvia de contrasenya</h4>
            <p>Des d'aquí pots canviar la teva contrasenya d'accés a la web.</p>
            <form method="POST" action="">
              <input type="password" id="password" name="password" placeholder="contrasenya" required onkeyup='check2();'>
              <input type="password" name="passwordconfirm" id="passwordconfirm" placeholder="contrasenya" required onkeyup='check2();'>
              <span id="menssatge"></span>
              <p class="mt-3 mb-3"><input type="submit" name="canviarcontrasenya" value="Enviar"></p>
            </form>
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