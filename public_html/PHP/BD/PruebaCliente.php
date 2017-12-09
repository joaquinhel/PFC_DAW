<?php

class PruebaCliente {

    protected $prueba_idPrueba;
    protected $cliente_idCliente;
    protected $diagnostico;
    protected $fechaPrueba;
    protected $nombreCliente;
    protected $nombrePrueba;

    public function __construct($row) {
        $this->cliente_idCliente = $row ['cliente_idCliente'];
        $this->prueba_idPrueba = $row ['prueba_idPrueba'];
        $this->diagnostico = $row ['diagnostico'];
        $this->fechaPrueba = $row ['fechaPrueba'];
        $this->nombreCliente = $row ['nombreCliente'];
        $this->nombrePrueba = $row ['nombrePrueba'];
    }

    public function getPrueba_idPrueba() {
        return $this->prueba_idPrueba;
    }

    public function getCliente_idCliente() {
        return $this->cliente_idCliente;
    }

    public function getDiagnostico() {
        return $this->diagnostico;
    }

    public function getFechaPrueba() {
        return $this->fechaPrueba;
    }

    public function setPruebas_idPruebas($prueba_idPrueba) {
        $this->prueba_idPrueba = $prueba_idPrueba;
    }

    public function setCliente_idCliente($cliente_idCliente) {
        $this->cliente_idCliente = $cliente_idCliente;
    }

    public function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    public function setFechaPrueba($fechaPrueba) {
        $this->fechaPrueba = $fechaPrueba;
    }

    public function getNombreCliente() {
        return $this->nombreCliente;
    }

    public function getNombrePrueba() {
        return $this->nombrePrueba;
    }

    public function setNombreCliente($nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    public function setNombrePrueba($nombrePrueba) {
        $this->nombrePrueba = $nombrePrueba;
    }

}
