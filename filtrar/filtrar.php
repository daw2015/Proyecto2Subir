<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require '../clases/Request.php';
        $correo = Request::post('correo');
        $ip = Request::post('ip');
        $url = Request::post('url');
        $numero = Request::post('numero');
        
      if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
          echo 'El correo es valido<br />';
      }else{
          echo 'El correo no es valido<br />';
      }
      
      if(filter_var($numero, FILTER_VALIDATE_INT)){
          echo 'El numero es valido<br />';
      }else{
          echo 'El numero no es valido<br />';
      }
      
      if(filter_var($ip, FILTER_VALIDATE_IP)){
          echo 'La ip es valida<br />';
      }else{
          echo 'La ip no es valida<br />';
      }
     
      if(filter_var($url, FILTER_VALIDATE_URL)){
          echo 'La url es valida<br />';
      }else{
          echo 'La url no es valida<br />';
      }
     
        ?>
        <br>
        el valor introducido es <?php echo Request::post("texto"); ?>
         <?php echo htmlspecialchars_decode(Request::post("texto")); ?>
        <h1><?php echo Request::req("texto"); ?></h1>
        
    </body>
</html>
