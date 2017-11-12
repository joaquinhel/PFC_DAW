<?php

class Proveedor {

    protected $idProveedor;
    protected $nombreEmpresa;
    protected $personaContacto;
    protected $direccion;
    protected $cif;
    protected $email;
    protected $telefono;

    public function __construct($row) {
        $this->idProveedor = $row ['idProveedor'];
        $this->nombreEmpresa = $row ['nombreEmpresa'];
        $this->personaContacto = $row ['personaContacto'];
        $this->direccion = $row ['direccion'];
        $this->cif = $row ['cif'];
        $this->email = $row ['email'];
        $this->telefono = $row ['telefono'];
    }

    public function getCif() {
        return $this->cif;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getIdProveedor() {
        return $this->idProveedor;
    }

    public function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    public function getPersonaContacto() {
        return $this->personaContacto;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    public function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function setPersonaContacto($personaContacto) {
        $this->personaContacto = $personaContacto;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setCif($cif) {
        $this->cif = $cif;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}
