<?php

class Usuario {

    protected $idUsuario;
    protected $login;
    protected $pass;
    protected $fecha_alta;
    protected $nombre;
    protected $estado;

    public function __construct($row) {
        $this->idUsuario = $row ['idUsuario'];
        $this->login = $row ['login'];
        $this->pass = $row ['pass'];
        $this->fecha_alta = $row ['fecha_alta'];
        $this->nombre = $row ['nombre'];
        $this->estado = $row ['estado'];
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

        public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getFecha_alta() {
        return $this->fecha_alta;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }

}
