<?php

class Usuario {
    
    private $nombre, $clave;
    
    function __construct($nombre=null, $clave=null) {
        $this->nombre = $nombre;
        $this->clave = $clave;
    }
    
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function __toString() {
        return $this->nombre;
    }
}
