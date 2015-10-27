<!--<!DOCTYPE html>-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        ?>
        <form action="obtenerparametrosrepetidos.php" method="GET">
            <input type="text" name="param1[]" value="valor uno" />
            <input type="text" name="param1[]" value="valor dos" />
            <select name="param2[]" size="4" multiple>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="0">10</option>
            </select>
            <input type="submit" value="enviar" />
        </form>
    </body>
</html>
