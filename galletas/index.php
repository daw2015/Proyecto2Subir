<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
$cookieUsuario = Galleta::get("user");
$checked = "";
if($cookieUsuario!==null){
    $checked = "checked";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="login" action="phplogin.php" method="POST">
            <input type="text" name="user" value="<?php echo $cookieUsuario; ?>" placeholder="Usuario:"/>
            <input type="password" name="password" value="" placeholder="Password:"/>
            <label for="recordar">Recordar usuario: </label><input type="checkbox" id="recordar" name="recordar" value="" <?php echo $checked ?> />
            <input type="submit" value="Login" name="login"/>
        </form>
    </body>
</html>
