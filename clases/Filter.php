<?php

class Filter {
    
    static function isEmail($valor){
        return filter_var($valor, FILTER_VALIDATE_EMAIL);
    }
    
    static function isNumber($valor){
        filter_var($valor, FILTER_VALIDATE_INT);
    }
    
    
    static function isFloat($valor){
        filter_var($valor, FILTER_VALIDATE_FLOAT);
    }
    
    
    static function isIp($valor){
        filter_var($valor, FILTER_VALIDATE_IP);
    }
    
    static function isUrl($valor){
        filter_var($valor, FILTER_VALIDATE_URL);
    }
    
    static function isMinLength($valor, $longitud){
        return strlen($valor) >= $longitud;
    }
    
    static function isLogin($valor){
       /*  if(preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/', $valor));{
             return true;
         }
         return false;*/
         return preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/', $valor);
    }
}
