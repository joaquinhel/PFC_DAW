<?php

include_once ('Usuario.php');
include_once ('BD.php');

class usuarioBD {

    public static function listarTodos() {
        $sql = "SELECT idUsuario, login, pass, fecha_alta from optica.usuario";
        $resultado = BD::ejecutaConsulta($sql);
        $usuarios = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $usuarios[] = new Usuario($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $usuarios;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosUsuario($cod) {
        $sql = "SELECT idUsuario, login, pass, fecha_alta from optica.usuario "
                . "where idUsuario=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $usuario = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $usuario = new Usuario($row);
        }
        return $usuario;
    }

//Borrar un producto
    public static function borrarUsuario($cod) {
        $sql = "DELETE from optica.usuario where idUsuario =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarUsuario($row) {
        $sql = "insert into optica.usuario (login, pass, fecha_alta) values ( "
                . " ' " . $row['login'] . "'"
                . ", '" . $row['pass'] . "'"
                . ", '" . $row['fecha_alta'] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarUsuario($row) {
        $sql = "update optica.usuario set "
                . "pass = '" . $row['pass'] . "', "
                . "fecha_alta = '" . $row['fecha_alta'] . "' "
                . "where idUsuario = '" . $row['idUsuario'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
