<?php

class Empleado {

    protected $idEmpleado;
    protected $nombreEmpleado;
    protected $apellidos;
    protected $direccion;
    protected $telefono;
    protected $email;
    protected $fechaContratacion;
    protected $sueldo;
    protected $nif;
    protected $estado;

    public function __construct($row) {
        $this->idEmpleado = $row ['idEmpleado'];
        $this->nombreEmpleado = $row ['nombreEmpleado'];
        $this->apellidos = $row ['apellidos'];
        $this->direccion = $row ['direccion'];
        $this->telefono = $row ['telefono'];
        $this->email = $row ['email'];
        $this->fechaContratacion = $row ['fechaContratacion'];
        $this->sueldo = $row ['sueldo'];
        $this->nif = $row ['nif'];
        $this->estado = $row ['estado'];
    }

    public function getNif() {
        return $this->nif;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getNombreEmpleado() {
        return $this->nombreEmpleado;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFechaContratacion() {
        return $this->fechaContratacion;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function setNombreEmpleado($nombreEmpleado) {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFechaContratacion($fechaContratacion) {
        $this->fechaContratacion = $fechaContratacion;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function setNif($nif) {
        $this->nif = $nif;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

}
