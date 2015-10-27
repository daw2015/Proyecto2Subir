<?php
require './clases/Request.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        var_dump($_POST);
//        //echo "Han llegado x valores de param2[]... el valor 1 es..." ;
//        $param2 = $_POST["param2"];
//        echo "<br/> numero de valores: ".count($param2)."<br/>";
//        foreach ($param2 as $clave => $valor) {
//            echo "<br/>indice: $clave; valor: $valor<br/>";
//        }
        $todos = Request::get("param2");
        $uno =  Request::get("param2",2);
        var_dump($uno);
        var_dump($todos);
        ?>
    </body>
</html>
