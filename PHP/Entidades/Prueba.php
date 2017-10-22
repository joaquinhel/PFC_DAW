<?php

class Prueba {

    protected $idpruebas;
    protected $nombrePrueba;
    protected $aparatosNecesarios;

    public function __construct($row) {
        $this->idpruebas = $row ['idpruebas'];
        $this->nombrePrueba = $row ['nombrePrueba'];
        $this->aparatosNecesarios = $row ['aparatosNecesarios'];
    }

    public function getIdpruebas() {
        return $this->idpruebas;
    }

    public function getNombrePrueba() {
        return $this->nombrePrueba;
    }

    public function getAparatosNecesarios() {
        return $this->aparatosNecesarios;
    }

    public function setIdpruebas($idpruebas) {
        $this->idpruebas = $idpruebas;
    }

    public function setNombrePrueba($nombrePrueba) {
        $this->nombrePrueba = $nombrePrueba;
    }

    public function setAparatosNecesarios($aparatosNecesarios) {
        $this->aparatosNecesarios = $aparatosNecesarios;
    }

}
