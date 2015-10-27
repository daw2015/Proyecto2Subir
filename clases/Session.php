<?php

class Session {

    private static $iniciada = false;

    function __construct($nombre = null) {
        if (!self::$iniciada){
            if($nombre!=null){
                session_name($nombre);
            }
            session_start();
            $this->_control();
        }
        self::$iniciada = true;
    }

    private function _control() {
        $ip = $this->get('_ip');
        $cliente = $this->get('_cliente');
        if ($ip == null && $cliente == null) {
            $this->set('_ip', Server::getClientAddress());
            $this->set('_cliente', Server::getUserAgent());
        } else {
            if ($ip !== Server::getClientAddress() || $cliente !== Server::getUserAgent()) {
                $this->destroy();
            }
        }
    }
    
    function isLogged(){
        return $this->getUser()!=null;
    }

    function get($nombre) {
        if (isset($_SESSION[$nombre])) {
            return $_SESSION[$nombre];
        }
        return null;
    }
    
    function getUser(){
        return $this->get("_usuario");
    }

    function set($nombre, $valor) {
        $_SESSION[$nombre] = $valor;
    }

    function setUser(Usuario $usuario){
        $this->set("_usuario", $usuario);
    }
    
    function delete($nombre) {
        if (isset($_SESSION[$nombre])) {
            unset($_SESSION[$nombre]);
        }
    }

    function destroy() {
        session_destroy();
    }

    //El segundo parametro nos manda al sitio y hacemos un exit
    function sendRedirect($destino = "index.php", $final = true){
        header("Location: $destino");
        if($final ===true){
            exit();
        }
    }
    
}
