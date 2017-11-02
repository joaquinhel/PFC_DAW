<?php

include_once ('Proveedor.php');
include_once ('BD.php');

class proveedorBD {

    public static function listarTodos() {
        $sql = "SELECT idProveedor, direccion, nombreEmpresa,personaContacto"
                . " from optica.proveedor";
        $resultado = BD::ejecutaConsulta($sql);
        $proveedores = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $proveedores[] = new Proveedor($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $proveedores;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosProveedor($cod) {
        $sql = "SELECT idProveedor, direccion, nombreEmpresa,personaContacto"
                . "from optica.proveedor "
                . "where idProveedor=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $proveedor = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $proveedor = new Proveedor($row);
        }
        return $proveedor;
    }

//Borrar un producto
    public static function borrarProveedor($cod) {
        $sql = "DELETE from optica.proveedor where idProveedor =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarProveedor($row) {
        $sql = "insert into optica.proveedor ("
                . "direccion, nombreEmpresa,personaContacto) values ( "
                . " '" . $row['direccion'] . "'"
                . ", '" . $row['nombreEmpresa'] . "'"
                . ", '" . $row['personaContacto'] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarProveedor($row) {
        $sql = "update optica.proveedor set "
                . "direccion='" . $row['direccion'] . "' , "
                . "nombreEmpresa = '" . $row['nombreEmpresa'] . "', "
                . "personaContacto = '" . $row['personaContacto'] . "', "
                . "where idProveedor = '" . $row['idProveedor'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
