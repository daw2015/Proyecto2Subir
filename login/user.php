<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

if(!$sesion->isLogged()){
    $sesion->sendRedirect("login.php");
    exit();
}
$user = $sesion->getUser();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Hola: <?php echo $user->getNombre(); ?></h1>
    </body>
</html>
