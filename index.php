<?php
//use libreria\Matematicas;
//use libreria\Matematicas as Mates; apodo
require './clases/AutoCarga.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//            echo Util::concatenar("hola","mundo");
//            echo "<br>";
//            echo libreria\Matematicas::suma(23, 11); //Este metodo seria sin el use
//            echo Matematicas::suma(12,24); // Con el use
//            echo Mates::suma(23,24); // con el apodo
              echo Request::get("hola");
        ?>
    </body>
</html>
