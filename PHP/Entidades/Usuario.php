<?php

class Usuario {

    protected $clave;
    protected $contrasena;
    protected $fecha;
    
    public function __construct($row) {
        $this->clave = $row ['clave'];
        $this->contrasena = $row ['contrasena'];
        $this->fecha = $row ['fecha'];
    }
    
    public function getClave() {
        return $this->clave;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
