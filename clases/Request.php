<?php

class Request {

    //filtra y limpia valores <script>...</script>
    private static function clean($valor, $filtrar) {
        //Limpiamos
        if($filtrar===true){
            $valor = htmlspecialchars($valor);
        }
        return trim($valor);
    }

    static function get($nombre, $filtrar=true ,$indice = null) {
        if (isset($_GET[$nombre])) {
            return self::read($_GET[$nombre], $filtrar ,$indice);
        }
        return null;
    }

    static function post($nombre, $filtrar=true ,$indice = null) {
        if (isset($_POST[$nombre])) {
            return self::read($_POST[$nombre], $filtrar  ,$indice);
        }
        return null;
    }

    static function req($nombre, $indice=null) {
        $valor = self::post($nombre, $indice);
        if ($valor !== null) {
            return $valor;
        }
        return self::get($nombre, $indice);
    }

    /* ---------- Otra forma -------------

      static function req($nombre) {
      if (Server::isPost()) {
      if (self::post($nombre) != null) {
      return self::post($nombre);
      } else {
      return self::get($nombre);
      }
      }
      return self::get($nombre);
      }
     */

    //$_GET['nombre'] || $_POST['nombre']
   private static function read($parametro, $filtrar=true ,$indice = null) {
        if (is_array($parametro)) {
            if ($indice === null) {
                $array = array();
                foreach ($parametro as $value) {
                    $array[] = self::clean($value, $filtrar);
                }
                return $array;
            } else {
                if (isset($parametro[$indice])) {
                    return self::clean($parametro[$indice], $filtrar);
                }
            }
        } else {
            return self::clean($parametro, $filtrar);
        }
    }

    static function elements($nombre) {
        
    }

}
