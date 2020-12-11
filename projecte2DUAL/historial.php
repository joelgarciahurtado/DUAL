<?php

include_once __DIR__."/php/conexion.php";

session_start();

include_once __DIR__."/php/queryinicisessio.php";

$query = "SELECT * FROM (Espectacles e INNER JOIN Reserves r ON r.FK_ID_Espectacle=e.ID_Espectacle) INNER JOIN Recinte rec ON e.FK_ID_Recinte=rec.ID_Recinte WHERE r.FK_ID_Usuari= :ID_Usuari";
  $sql = $pdo->prepare($query);

  $sql->bindParam(':ID_Usuari', $_SESSION['user_id']);

  $sql->execute();

  $result = $sql->fetchAll();

?>

 <!DOCTYPE html>
<html lang="ca">
<head>
	<title>Historial de compres</title>
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
                    <h4>Historial de compres</h4> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Esdeveniments</th>
                                <th scope="col">Data</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Lloc de celebració</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $printhistorial = "";			


                                foreach($result as $fila){
                                    $printhistorial .= "<tr><td>".$fila['Nom_Espectacle'] .
                                        "</td><td>".$fila['Data'].
                                        "</td><td>".$fila['Hora'].
                                        "</td><td>".$fila['Nom'].
                                        "</td>".
                                        "</tr>";
                                }

                                echo($printhistorial);

                                ?>

                         </tbody>
                    </table>
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