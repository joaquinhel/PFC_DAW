<?php

include_once ('PruebaCliente.php');
include_once ('BD.php');

class pruebaClienteBD {

    public static function listarTodos() {
        $sql = "SELECT cliente_idCliente, prueba_idPrueba, diagnostico, fechaPrueba"
                . " from optica.pruebaCliente";
        $resultado = BD::ejecutaConsulta($sql);
        $pruebaClientes = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $pruebaClientes[] = new PruebaCliente($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $pruebaClientes;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosPruebaCliente($cod, $cod1) {
        $sql = "SELECT cliente_idCliente, prueba_idPrueba, diagnostico, fechaPrueba"
                . " from optica.pruebaCliente"
                . " where cliente_idCliente=" . $cod . " and prueba_idPrueba=". $cod1 ;
        $resultado = BD::ejecutaConsulta($sql);
        $pruebaCliente = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $pruebaCliente = new PruebaCliente($row);
        }
        return $pruebaCliente;
    }

//Borrar un producto
    public static function borrarPruebaCliente($cod, $cod1) {
        $sql = "DELETE from optica.pruebaCliente "
               . "where cliente_idCliente=" . $cod . " and prueba_idPrueba= ". $cod1 ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarPruebaCliente($row) {
        $sql = "insert into optica.pruebaCliente ("
                . "cliente_idCliente, prueba_idPrueba, diagnostico, fechaPrueba) values ( "
                . " '" . $row['cliente_idCliente'] . "'"
                . ", '" . $row['prueba_idPrueba'] . "'"
                . ", '" . $row['diagnostico'] . "'"
                . ", '" . $row['fechaPrueba'] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarPruebaCliente($row) {
        $sql = "update optica.pruebaCliente set "
                . "diagnostico = '" . $row['diagnostico'] . "', "
                . "fechaPrueba = '" . $row['fechaPrueba'] . "' "
                . "where cliente_idCliente = '" . $row['cliente_idCliente'] . "'"
                . " and prueba_idPrueba = '" . $row['prueba_idPrueba'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
