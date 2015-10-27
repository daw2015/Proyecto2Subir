<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul id="friendlist">
            <li><a href="phpadd.php?friend=Pepe">Pepe</a></li>
            <li><a href="phpadd.php?friend=Paco">Paco</a></li>
            <li><a href="phpadd.php?friend=Juan">Juan</a></li>
            <li><a href="phpadd.php?friend=Maria">Maria</a></li>
            <li><a href="phpadd.php?friend=Ana">Ana</a></li>
        </ul>
        <hr>
        <ul id="invitedfriends">
            <?php 
                session_start();
                if(isset($_SESSION["friends"])){ 
                    $friends = $_SESSION["friends"];
                    foreach ($friends as $key => $value) {
                        echo "<li>$value</li>";
                    }
               }
            ?>
        </ul>
        <a href="phpdelete.php">empezar la lista de nuevo</a>
    </body>
</html>
