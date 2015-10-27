<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            if(!$sesion->isLogged()){
        ?>
        <form name="login" action="phplogin.php" method="POST">
            <input type="text" name="user" value="" placeholder="Usuario:"/>
            <input type="password" name="password" value="" placeholder="Password:"/>
            <input type="submit" value="Login" name="login"/>
        </form>
        <?php 
            } else{
        ?>  
                <a href="phplogout.php">logout</a>
                <?php 
                    }
                ?>
    </body>
</html>
