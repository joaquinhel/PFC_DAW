<?php

class Cliente {

    protected $idCliente;
    protected $nombreCliente;
    protected $apellidos;
    protected $direccion;
    protected $telefono;
    protected $nif;
    protected $email;

    public function __construct($row) {
        $this->idCliente = $row ['idCliente'];
        $this->nombreCliente = $row ['nombreCliente'];
        $this->apellidos = $row ['apellidos'];
        $this->direccion = $row ['direccion'];
        $this->telefono = $row ['telefono'];
        $this->nif = $row ['nif'];
        $this->nif = $row ['email'];
    }
    
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

        public function getIdCliente() {
        return $this->idCliente;
    }

    public function getNombreCliente() {
        return $this->nombreCliente;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getNif() {
        return $this->nif;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setNombreCliente($nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setNif($nif) {
        $this->nif = $nif;
    }

}
