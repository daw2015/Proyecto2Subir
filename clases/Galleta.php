<?php

class Galleta {
    
    static function set($nombre,$valor,$tiempo = null){
        if($tiempo == null){
            $tiempo = time()+60*60*24*5; //5 dias
        }
        setcookie($nombre, $valor, $tiempo);
    }
    
    static function get($nombre){
        if(isset($_COOKIE[$nombre])){
            return $_COOKIE[$nombre];
        }
        return null;
    }
    
    static function delete($nombre){
        setcookie($nombre, "", time()-3600);
    }
    
}
