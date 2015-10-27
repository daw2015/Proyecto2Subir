<?php

class Server {
    
    static function getServerName(){
        return $_SERVER["SERVER_NAME"];
    }
    
    static function getRootPath(){
        return $_SERVER["CONTEXT_DOCUMENT_ROOT"];
    }
    
    static function getPort(){
        return $_SERVER["SERVER_PORT"];
    }
    
    static function getUserAgent(){
        return $_SERVER["HTTP_USER_AGENT"];
    }
    
    static function getQueryString(){
        return $_SERVER["QUERY_STRING"];
    }
    
    static function getFile(){
        return $_SERVER["SCRIPT_FILENAME"];
    }
    
    static function getMethod(){
        return $_SERVER["REQUEST_METHOD"];
    }
    
    static function isGet(){
        return self::getMethod()=="GET";
    }
    
    static function isPost(){
        return self::getMethod()=="POST";
    }
    
    static function getClientAddress(){
        return $_SERVER["REMOTE_ADDR"];
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    
    static function getClientLanguage(){
        return $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    }
    
    
    static function getRequestDate($campo=null){
        switch ($campo){                
            case "Y":
                return intval(date("Y", $SERVER["REQUEST_TIME"]));
            case "M":
                return intval(date("m", $SERVER["REQUEST_TIME"]));
            case "D":
                return intval(date("d", $SERVER["REQUEST_TIME"]));
            case "h":
                return intval(date("H", $SERVER["REQUEST_TIME"]));
            case "m":
                return intval(date("i", $SERVER["REQUEST_TIME"]));
            case "s":
                return intval(date("s", $SERVER["REQUEST_TIME"]));
        }
       return $_SERVER["REQUEST_TIME"];
    }
        
       
}
