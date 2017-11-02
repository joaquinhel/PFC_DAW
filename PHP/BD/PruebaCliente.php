<?php

class pruebaCliente {

    protected $pruebas_idpruebas;
    protected $cliente_idCliente;
    protected $diagnostico;
    protected $fechaPrueba;

    public function __construct($row) {
        $this->pruebas_idpruebas = $row ['cliente_idCliente'];
        $this->cliente_idCliente = $row ['$pruebas_idpruebas'];
        $this->diagnostico = $row ['diagnostico'];
        $this->diagnostico = $row ['fechaPrueba'];
    }

    function getFechaPrueba() {
        return $this->fechaPrueba;
    }

    function setFechaPrueba($fechaPrueba) {
        $this->fechaPrueba = $fechaPrueba;
    }

    public function getPruebas_idpruebas() {
        return $this->pruebas_idpruebas;
    }

    public function getCliente_idCliente() {
        return $this->cliente_idCliente;
    }

    public function getDiagnostico() {
        return $this->diagnostico;
    }

    public function setPruebas_idpruebas($pruebas_idpruebas) {
        $this->pruebas_idpruebas = $pruebas_idpruebas;
    }

    public function setCliente_idCliente($cliente_idCliente) {
        $this->cliente_idCliente = $cliente_idCliente;
    }

    public function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

}
