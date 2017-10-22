<?php

class Compra {

    protected $idcompra;
    protected $fechaEmision;
    protected $fechaVencimiento;
    protected $detalleCompra_idDetalleCompra;
    protected $proveedor_idProveedor;

    public function __construct($row) {
        $this->idcompra = $row ['idcompra'];
        $this->fechaEmision = $row ['fechaEmision'];
        $this->fechaVencimiento = $row ['fechaVencimiento'];
        $this->detalleCompra_idDetalleCompra = $row ['detalleCompra_idDetalleCompra'];
        $this->proveedor_idProveedor = $row ['proveedor_idProveedor'];
    }

    public function getIdcompra() {
        return $this->idcompra;
    }

    public function getFechaEmision() {
        return $this->fechaEmision;
    }

    public function getFechaVencimiento() {
        return $this->fechaVencimiento;
    }

    public function getDetalleCompra_idDetalleCompra() {
        return $this->detalleCompra_idDetalleCompra;
    }

    public function getProveedor_idProveedor() {
        return $this->proveedor_idProveedor;
    }

    public function setIdcompra($idcompra) {
        $this->idcompra = $idcompra;
    }

    public function setFechaEmision($fechaEmision) {
        $this->fechaEmision = $fechaEmision;
    }

    public function setFechaVencimiento($fechaVencimiento) {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    public function setDetalleCompra_idDetalleCompra($detalleCompra_idDetalleCompra) {
        $this->detalleCompra_idDetalleCompra = $detalleCompra_idDetalleCompra;
    }

    public function setProveedor_idProveedor($proveedor_idProveedor) {
        $this->proveedor_idProveedor = $proveedor_idProveedor;
    }

}
