<?php

class Compra {

    protected $idCompra;
    protected $fechaEmision;
    protected $fechaVencimiento;
    protected $proveedor_idProveedor;

    public function __construct($row) {
        $this->idCompra = $row ['idCompra'];
        $this->fechaEmision = $row ['fechaEmision'];
        $this->fechaVencimiento = $row ['fechaVencimiento'];
        $this->proveedor_idProveedor = $row ['proveedor_idProveedor'];
    }

    public function getIdcompra() {
        return $this->idCompra;
    }

    public function getFechaEmision() {
        return $this->fechaEmision;
    }

    public function getFechaVencimiento() {
        return $this->fechaVencimiento;
    }

    public function getProveedor_idProveedor() {
        return $this->proveedor_idProveedor;
    }

    public function setIdcompra($idCompra) {
        $this->idCompra = $idCompra;
    }

    public function setFechaEmision($fechaEmision) {
        $this->fechaEmision = $fechaEmision;
    }

    public function setFechaVencimiento($fechaVencimiento) {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    public function setProveedor_idProveedor($proveedor_idProveedor) {
        $this->proveedor_idProveedor = $proveedor_idProveedor;
    }

}
