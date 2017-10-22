<?php

/* Categoria de los productos */

class categoria {

    protected $idCategoria;
    protected $nombreCategoria;

    public function __construct($row) {
        $this->idCategoria = $row ['idCategoria'];
        $this->nombreCategoria = $row ['nombreCategoria'];
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }

}
