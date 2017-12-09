<?php

include_once ('Producto.php');
include_once ('BD.php');

class productoBD {

    public static function listarTodos() {
        $sql = "SELECT pr.idProducto, pr.nombreProducto, pr.descripcion,"
                . " pr.marca, pr.precio, pr.proveedor_idProveedor, pr.categoria_idCategoria, "
                . " p.nombreEmpresa, c.nombreCategoria"
                . " from optica.producto pr, optica.proveedor p, optica.categoria c "
                . "where p.idProveedor=pr.proveedor_idProveedor and c.idCategoria=pr.categoria_idCategoria"
        ;
        $resultado = BD::ejecutaConsulta($sql);
        $productos = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $productos[] = new Producto($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $productos;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosProducto($cod) {
        $sql = "SELECT pr.idProducto, pr.nombreProducto, pr.descripcion,"
                . " pr.marca, pr.precio, p.nombreEmpresa, c.nombreCategoria, "
                . "pr.proveedor_idProveedor, pr.categoria_idCategoria "
                . " from optica.producto pr, optica.proveedor p, optica.categoria c "
                . "where p.idProveedor=pr.proveedor_idProveedor and c.idCategoria=pr.categoria_idCategoria "
                . "and idProducto=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $producto = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $producto = new Producto($row);
        }
        return $producto;
    }

//Borrar un producto
    public static function borrarProducto($cod) {
        $sql = "DELETE from optica.producto where idProducto =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarProducto($row) {
        $sql = "insert into optica.producto (nombreProducto, descripcion, "
                . " marca, precio, proveedor_idProveedor, categoria_idCategoria) values ("
                . " '" . $row['nombreProducto'] . "'"
                . ", '" . $row['descripcion'] . "'"
                . ", '" . $row['marca'] . "'"
                . ", '" . $row['precio'] . "'"
                . ", '" . $row['proveedor_idProveedor'] . "'"
                . ", '" . $row['categoria_idCategoria'] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarProducto($row) {
        $sql = "update optica.producto set "
                . "nombreProducto='" . $row['nombreProducto'] . "' , "
                . "descripcion='" . $row['descripcion'] . "', "
                . "marca = '" . $row['marca'] . "', "
                . "precio = '" . $row['precio'] . "', "
                . "proveedor_idProveedor = '" . $row['proveedor_idProveedor'] . "', "
                . "categoria_idCategoria = '" . $row['categoria_idCategoria'] . "'"
                . "where idProducto = '" . $row['idProducto'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
