<!DOCTYPE html>
<html lang="ca">
<head>
	<title>Alta de alumnes</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/styles2.css">
</head>
<body>

<div class="container">
  <div class="row">

    <div class="col-xl-9" id="bodyregistre">
      <section>
        <article>
          <h4>Alta de alumnes</h4>

        <div class="container">
          

          <form action="php/registro.php" method="POST">

            <div class="row m-3">
              <div class="col-xl-4">
                <input type="text" name="nom" placeholder="Nom" required>
              </div>
              <div class="col-xl-4">
                <input type="text" name="cognoms" placeholder="Cognoms" required>
              </div>
           </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="text" name="dni" placeholder="dni">
            </div>
            <div class="col-xl-4">
             <input type="tel" name="telefon_fix" placeholder="teléfon fix">
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-4">
            <input type="tel" name="telefon_mobil" placeholder="Telèfon mòbil">
            </div>
            <div class="col-xl-4">
             <input type="text" name="direccio" placeholder="direcció">
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="text" name="poblacio" placeholder="població">
            </div>
          </div>

          <div class="row m-3">
            <div class="col-xl-4">
              <input type="text" name="cp" placeholder="codi postal">
            </div>
            <div class="col-xl-4">
              <input type="date" name="data_naixement" placeholder="data de naixement">
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

include_once __DIR__."/loggejat.php";

?>

  </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
<script src="scripts.js"></script>
</body>
</html>