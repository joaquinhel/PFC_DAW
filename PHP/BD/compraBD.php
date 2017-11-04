<?php

include_once ('Compra.php');
include_once ('BD.php');

class compraBD {

    public static function listarTodos() {
        $sql = "SELECT idCompra, fechaEmision, fechaVencimiento,"
                . " proveedor_idProveedor"
                . " from optica.compra";
        $resultado = BD::ejecutaConsulta($sql);
        $compras = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $compras[] = new Compra($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $compras;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosCompra($cod) {
        $sql = "SELECT idCompra, fechaEmision, fechaVencimiento,"
                . " proveedor_idProveedor"
                . " from optica.compra where idCompra=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $compra = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $compra = new Compra($row);
        }
        return $compra;
    }

//Borrar un producto
    public static function borrarCompra($cod) {
        $sql = "DELETE from optica.compra where idCompra =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarCompra($row) {
        $sql = "insert into optica.compra (fechaEmision, fechaVencimiento, "
                . "proveedor_idProveedor) values ( "
                . " '" . $row[0] . "'"
                . ", '" . $row[1] . "'"
                . ", '" . $row[2] . "');"        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarCompra($row) {
        $sql = "update optica.compra set "
                . "fechaEmision='" . $row['fechaEmision'] . "' , "
                . "fechaVencimiento='" . $row['fechaVencimiento'] . "'  "
                /*. "proveedor_idProveedor='" . $row['proveedor_idProveedor'] . "' "*/
                . "where idCompra ='" . $row['idCompra'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
