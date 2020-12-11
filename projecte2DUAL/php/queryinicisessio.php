<?php

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