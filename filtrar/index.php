<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="formulario" action="filtrar.php" method="POST">
            <input type="text" name="texto" value="" />
            <input type="text" name="correo" value="" placeholder="Introduce tu correo" />
            <input type="text" name="numero" value="" placeholder="Introduce un numero" />
            <input type="text" name="ip" value="" placeholder="Introduce una ip" />
            <input type="text" name="url" value="" placeholder="Introduce una url" />
            <br/>
            <input type="submit" value="enviar" />
        </form>
        <a href="filtrar.php?texto=fola que tal">hola</a>
        <?php echo '<a href="filtrar.php?texto='.urlencode('hola que tal').'">hola</a>';?>
    </body>
</html>
