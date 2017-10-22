<?php

class PedidoCliente {

    protected $idPedido;
    protected $fechaPedido;
    protected $cantidad;
    protected $empleado_idEmpleado;
    protected $cliente_idCliente;

    public function __construct($row) {
        $this->idPedido = $row ['idPedido'];
        $this->fechaPedido = $row ['fechaPedido'];
        $this->cantidad = $row ['cantidad'];
        $this->empleado_idEmpleado = $row ['empleado_idEmpleado'];
        $this->cliente_idCliente = $row ['cliente_idCliente'];
    }

    public function getIdPedido() {
        return $this->idPedido;
    }

    public function getFechaPedido() {
        return $this->fechaPedido;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getEmpleado_idEmpleado() {
        return $this->empleado_idEmpleado;
    }

    public function getCliente_idCliente() {
        return $this->cliente_idCliente;
    }

    public function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
    }

    public function setFechaPedido($fechaPedido) {
        $this->fechaPedido = $fechaPedido;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setEmpleado_idEmpleado($empleado_idEmpleado) {
        $this->empleado_idEmpleado = $empleado_idEmpleado;
    }

    public function setCliente_idCliente($cliente_idCliente) {
        $this->cliente_idCliente = $cliente_idCliente;
    }

}
