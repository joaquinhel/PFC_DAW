<?php

class Producto {

    protected $idProducto;
    protected $nombreProducto;
    protected $descripcion;
    protected $marca;
    protected $precio;
    protected $categoria_idCategoria;
    protected $proveedor_idProveedor;
    protected $nombreEmpresa;
    protected $nombreCategoria;

    public function __construct($row) {
        $this->idProducto = $row ['idProducto'];
        $this->nombreProducto = $row ['nombreProducto'];
        $this->descripcion = $row ['descripcion'];
        $this->marca = $row ['marca'];
        $this->precio = $row ['precio'];
        $this->categoria_idCategoria = $row ['categoria_idCategoria'];
        $this->proveedor_idProveedor = $row ['proveedor_idProveedor'];
        $this->nombreEmpresa = $row ['nombreEmpresa'];
        $this->nombreCategoria = $row ['nombreCategoria'];
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getNombreProducto() {
        return $this->nombreProducto;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCategoria_idCategoria() {
        return $this->categoria_idCategoria;
    }

    public function getProveedor_idProveedor() {
        return $this->proveedor_idProveedor;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setCategoria_idCategoria($categoria_idCategoria) {
        $this->categoria_idCategoria = $categoria_idCategoria;
    }

    public function setProveedor_idProveedor($proveedor_idProveedor) {
        $this->proveedor_idProveedor = $proveedor_idProveedor;
    }

    public function getNombreCategoria() {
        return $this->nombreCategoria;
    }


    public function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }
    public function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    public function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }



}
