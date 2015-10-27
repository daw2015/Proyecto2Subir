<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action = "phpsubir.php" method = "POST" enctype = "multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit">
        </form>
        <a href="leer.php?imagen=i1.jpg">Ver primera imagen</a>
        <a href="leer.php?imagen=i2.gif">Ver segunda imagen</a>
        <img src="leer.php?imagen=i1.jpg"/>
        <img src="leer.php?imagen=i2.gif"/>
    </body>
</html>
