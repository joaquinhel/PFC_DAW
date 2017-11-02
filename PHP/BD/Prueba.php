<?php

class Prueba {

    protected $idPrueba;
    protected $nombrePrueba;
    protected $aparatosNecesarios;

    public function __construct($row) {
        $this->idprueba = $row ['idPrueba'];
        $this->nombrePrueba = $row ['nombrePrueba'];
        $this->aparatosNecesarios = $row ['aparatosNecesarios'];
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

    public function setIdprueba($idPrueba) {
        $this->idPrueba = $idPrueba;
    }

    public function setNombrePrueba($nombrePrueba) {
        $this->nombrePrueba = $nombrePrueba;
    }

    public function setAparatosNecesarios($aparatosNecesarios) {
        $this->aparatosNecesarios = $aparatosNecesarios;
    }

}
