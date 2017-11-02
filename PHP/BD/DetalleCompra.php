<?php

class DetalleCompra {

    protected $idDetalleCompra;
    protected $cantidad;
    protected $descripcion;
    protected $precioLista;
    protected $descuento;
    protected $subtotal;
    protected $totalNeto;
    protected $numOrden;
    protected $producto_idProducto;

    public function __construct($row) {
        $this->idDetallePedido = $row ['idDetalleCompra'];
        $this->descripcion = $row ['cantidad'];
        $this->cantidad = $row ['descripcion'];
        $this->precio = $row ['precioLista'];
        $this->subtotal = $row ['descuento'];
        $this->total = $row ['subtotal'];
        $this->idPedido = $row ['totalNeto'];
        $this->pedidoCliente_idPedido = $row ['numOrden'];
    }

    public function getIdDetalleCompra() {
        return $this->idDetalleCompra;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecioLista() {
        return $this->precioLista;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    public function getTotalNeto() {
        return $this->totalNeto;
    }

    public function getNumOrden() {
        return $this->numOrden;
    }

    public function getProducto_idProducto() {
        return $this->producto_idProducto;
    }

    public function setIdDetalleCompra($idDetalleCompra) {
        $this->idDetalleCompra = $idDetalleCompra;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setPrecioLista($precioLista) {
        $this->precioLista = $precioLista;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    public function setTotalNeto($totalNeto) {
        $this->totalNeto = $totalNeto;
    }

    public function setNumOrden($numOrden) {
        $this->numOrden = $numOrden;
    }

    public function setProducto_idProducto($producto_idProducto) {
        $this->producto_idProducto = $producto_idProducto;
    }

}
