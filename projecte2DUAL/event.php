<?php

include_once __DIR__."/php/conexion.php";

session_start();


include_once __DIR__."/php/queryinicisessio.php";



if (isset($_POST['comprarentrades'])) {

  $_POST['inputentradas'] = intval ($_POST['inputentradas']);

  $update = "UPDATE Espectacles SET Asientos = Asientos - :quantitatentrades WHERE ID_Espectacle=:id";
  $sql = $pdo->prepare($update);
  $sql->bindParam(':quantitatentrades', $_POST['inputentradas']);
  $sql->bindParam(':id', $_GET['id']);
  $sql->execute();
  }


try{
  $query = "SELECT * FROM Espectacles e INNER JOIN Recinte r ON e.FK_ID_Recinte=r.ID_Recinte WHERE e.ID_Espectacle= :id";
  $sql = $pdo->prepare($query);

  $sql->bindParam(':id', $_GET['id']);

  $sql->execute();

  $result = $sql->fetchAll();

}catch(PDOException $e){
  echo "Failed to get DB handle: " . $e->getMessage() . "\n";
  exit;
}

$result = $result[0];

$_SESSION['user_id'] = intval ($_SESSION['user_id']);

$insert = "INSERT INTO Reserves (FK_ID_Espectacle, FK_ID_Usuari, entrades) VALUES (:id, :ID_Usuari, :quantitatentrades)";

$sql = $pdo->prepare($insert);

$sql->bindParam(':id', $_GET['id']);
$sql->bindParam(':quantitatentrades', $_POST['inputentradas']);
$sql->bindParam(':ID_Usuari', $_SESSION['user_id']);

$sql->execute();


?>




 <!DOCTYPE html>
<html lang="ca">
<head>
	<title><?php echo $result['Nom_Espectacle'] ; ?></title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/styles2.css">

</head>
<body>
  <?php

  include_once __DIR__."/header.php";

  ?>

  



<div class="container">
    <div class="row">
      
      <div class="col" id="bodyevent">
        <section>
          <article>
            <h4><?php echo $result['Nom_Espectacle'] ; ?></h4>
            <img src="<?php echo $result['Foto'] ;?>"class="img-fluid">
            <p><?php echo $result['descripcio'] ; ?></p>
          </article>
        </section>
      </div>

      <div class="col-xl-3" id="divaside">
        <aside>
            <h4>Fitxa</h4>
            <p><?php echo $result['Nom_Espectacle'] ; ?></p>
            <p><?php echo $result['Data'] ; ?></p>
            <p><?php echo $result['Hora'] ; ?></p>
            <p>Stock de entrades: <?php echo $result['Asientos'] ; ?></p>
            <p><?php echo $result['Preu'] ; ?>€</p>
            <form  method='POST'>
              <p>
                <p id="selecciona"><label for="reserves">Selecciona:</label></p>
                <select name="reservesselect" id="reservesselect">
                  <option><?php echo $result['Data']." ".$result['Hora'] ; ?></option>
                </select>
              </p>

<?php

  if ($_SESSION['logged']) {
    echo "<p>Selecciona el nombre de entrades que vols reservar</p>";
    echo "<input type='number' id='inputentradas' name='inputentradas' min='1' max='". $result['Asientos'] ."'/>";
    echo "<p><input type='submit' name='comprarentrades' value='Comprar entrades'></p>";
    echo "</form>";
  } else {
    echo "</form>";
    echo "<form method='POST' action='' name='loginform'>";
    echo "<p><input type='email' name='email' placeholder='adreça de correu electrónic'></p>";
    echo "<p><input type='password' name='password' placeholder='contrasenya'></p>";
    echo "<input type='submit' name='login' value='Enviar'>";
    echo "</form>";
    }

?>
          </aside>
      </div>

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