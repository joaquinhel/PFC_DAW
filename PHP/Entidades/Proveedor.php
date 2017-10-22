<?php

class proveedor {

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

    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    function getPersonaContacto() {
        return $this->personaContacto;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function setPersonaContacto($personaContacto) {
        $this->personaContacto = $personaContacto;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

}
