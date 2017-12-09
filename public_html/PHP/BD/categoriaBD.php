<?php

include_once ('Categoria.php');
include_once ('BD.php');

class categoriaBD {

    public static function listarTodos() {
        $sql = "SELECT idCategoria, nombreCategoria from optica.categoria";
        $resultado = BD::ejecutaConsulta($sql);
        $categorias = array();
        if ($resultado) {
            // Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $categorias[] = new Categoria($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $categorias;
    }

    //Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosCategoria($cod) {
        $sql = "SELECT idCategoria, nombreCategoria "
                . "from optica.categoria "
                . "where idCategoria=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $categoria = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $categoria = new Categoria($row);
        }
        return $categoria;
    }

    //Borrar un producto
    public static function borrarCategoria($cod) {
        $sql = "DELETE from optica.categoria where idCategoria =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

    //Insertar un nuevo producto
    public static function insertarCategoria($nombreCategoria) {
        $sql = "insert into optica.categoria (nombreCategoria) values ('$nombreCategoria')";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

    //Actualizar producto
    public static function actualizarCategoria($row) {
        $sql = "update optica.categoria set nombreCategoria='" . $row['nombreCategoria'] 
                . "' where idCategoria ='" . $row['idCategoria'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
