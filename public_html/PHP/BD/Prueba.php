<?php

class Prueba {

    protected $idPrueba;
    protected $nombrePrueba;
    protected $aparatosNecesarios;
    protected $descripcion;

    public function __construct($row) {
        $this->idPrueba = $row ['idPrueba'];
        $this->nombrePrueba = $row ['nombrePrueba'];
        $this->aparatosNecesarios = $row ['aparatosNecesarios'];
        $this->descripcion = $row ['descripcion'];
    }

    public function getIdPrueba() {
        return $this->idPrueba;
    }

    public function getNombrePrueba() {
        return $this->nombrePrueba;
    }

    public function getAparatosNecesarios() {
        return $this->aparatosNecesarios;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setIdprueba($idPrueba) {
        $this->idPrueba = $idPrueba;
    }

    public function setNombrePrueba($nombrePrueba) {
        $this->nombrePrueba = $nombrePrueba;
    }

    public function setAparatosNecesarios($aparatosNecesarios) {
        $this->aparatosNecesarios = $aparatosNecesarios;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
