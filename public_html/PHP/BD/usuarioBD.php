<?php

include_once ('Usuario.php');
include_once ('BD.php');

class usuarioBD {

    public static function listarTodos() {
        $sql = "SELECT idUsuario, login, pass, fecha_alta, nombre, estado from optica.usuario";
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
        $sql = "SELECT idUsuario, login, pass, fecha_alta, nombre, estado from optica.usuario "
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
        $sql = "insert into optica.usuario (login, pass, nombre, estado, fecha_alta) values ( "
                . " ' " . $row['login'] . "'"
                . ", '" . $row['pass'] . "'"
                . ", '" . $row['nombre'] . "'"
                . ", '" . $row['estado'] . "'"
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
                . "nombre = '" . $row['nombre'] . "', "
                . "estado = '" . $row['estado'] . "' "
                . "where idUsuario = '" . $row['idUsuario'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

    public static function hacerLogin($login, $password) {
        $sql = "select login, pass from optica.usuario "
                . "where login= '" . $login . "' and pass='" . $password . "';";
        $resultado = BD::ejecutaConsulta($sql);
        $verificado = false;
        if (isset($resultado)) {
            $fila = $resultado->fetch();
            if ($fila != false) {
                $verificado = true;
            }
        }
        return $verificado;
    }

}
