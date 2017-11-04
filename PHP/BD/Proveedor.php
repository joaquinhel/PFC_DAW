<?php

class Proveedor {

    protected $idProveedor;
    protected $nombreEmpresa;
    protected $personaContacto;
    protected $direccion;

    public function __construct($row) {
        $this->idProveedor = $row ['idProveedor'];
        $this->nombreEmpresa = $row ['nombreEmpresa'];
        $this->personaContacto = $row ['personaContacto'];
        $this->direccion = $row ['direccion'];
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

}
