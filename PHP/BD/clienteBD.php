<?php

include_once ('Cliente.php');
include_once ('BD.php');

class clienteBD {

    public static function listarTodos() {
        $sql = "SELECT idCliente, nombreCliente, apellidos,direccion, telefono, nif, email from optica.cliente";
        $resultado = BD::ejecutaConsulta($sql);
        $clientes = array();
        if ($resultado) {
            // Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $clientes[] = new Cliente($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $clientes;
    }

    //Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosCliente($cod) {
        $sql = "SELECT idCliente, nombreCliente, apellidos, direccion, telefono, nif, email "
                . "from optica.cliente "
                . "where idCliente=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $cliente = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $cliente = new Cliente($row);
        }
        return $cliente;
    }

    //Borrar un producto
    public static function borrarCliente($cod) {
        $sql = "DELETE from optica.cliente where idCliente =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

    //Insertar un nuevo producto
    public static function insertarCliente($row) {
        $sql = "insert into optica.cliente (nombreCliente, apellidos, direccion, telefono, email, nif) values ( "
                . " '" . $row[0] . "'"
                . ", '" . $row[1] . "'"
                . ", '" . $row[3] . "'"
                . ", '" . $row[4] . "'"
                . ", '" . $row[5] . "'"
                . ", '" . $row[2] . "');";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarCliente($row) {
        $sql = "update optica.cliente set "
                . "nombreCliente='" . $row['nombreCliente'] . "' , "
                . "apellidos='" . $row['apellidos'] . "' , "
                . "direccion='" . $row['direccion'] . "' , "
                . "telefono='" . $row['telefono'] . "' , "
                . "telefono='" . $row['email'] . "' , "
                . "nif='" . $row['nif'] . "' "
                . "where idCliente ='" . $row['idCliente'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
