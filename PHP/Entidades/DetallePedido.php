<?php

class detallePedido {

    protected $idDetallePedido;
    protected $descripcion;
    protected $cantidad;
    protected $precio;
    protected $subtotal;
    protected $total;
    protected $idPedido;
    protected $pedidoCliente_idPedido;

    public function __construct($row) {
        $this->idDetallePedido = $row ['idDetallePedido'];
        $this->descripcion = $row ['descripcion'];
        $this->cantidad = $row ['cantidad'];
        $this->precio = $row ['precio'];
        $this->subtotal = $row ['subtotal'];
        $this->total = $row ['total'];
        $this->idPedido = $row ['idPedido'];
        $this->pedidoCliente_idPedido = $row ['pedidoCliente_idPedido'];
    }

    public function getIdDetallePedido() {
        return $this->idDetallePedido;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getIdPedido() {
        return $this->idPedido;
    }

    public function getPedidoCliente_idPedido() {
        return $this->pedidoCliente_idPedido;
    }

    public function setIdDetallePedido($idDetallePedido) {
        $this->idDetallePedido = $idDetallePedido;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
    }

    public function setPedidoCliente_idPedido($pedidoCliente_idPedido) {
        $this->pedidoCliente_idPedido = $pedidoCliente_idPedido;
    }

}
