<?php

include_once ('Prueba.php');
include_once ('BD.php');

class pruebaBD {

    public static function listarTodos() {
        $sql = "SELECT idPrueba, nombrePrueba, aparatosNecesarios"
                . " from optica.prueba";
        $resultado = BD::ejecutaConsulta($sql);
        $pruebas = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $pruebas[] = new Prueba($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $pruebas;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosPrueba($cod) {
        $sql = "SELECT idPrueba, nombrePrueba, aparatosNecesarios"
                . " from optica.prueba"
                . " where idPrueba=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $prueba = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $prueba = new Prueba($row);
        }
        return $prueba;
    }

//Borrar un producto
    public static function borrarPrueba($cod) {
        $sql = "DELETE from optica.prueba where idPrueba =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarPrueba($row) {
        $sql = "insert into optica.prueba (nombrePrueba, aparatosNecesarios) values ( "
                . " '" . $row['nombrePrueba'] . "'"
                . ", '" . $row['aparatosNecesarios'] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarPrueba($row) {
        $sql = "update optica.prueba set "
                . "nombrePrueba = '" . $row['nombrePrueba'] . "', "
                . "aparatosNecesarios = '" . $row['aparatosNecesarios'] . "', "
                . "where idPrueba = '" . $row['idPrueba'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
