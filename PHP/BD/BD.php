<?php

class BD {

    public static function conexion() {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8");
        $dns = "mysql:host=localhost;dbname=tarea5";
        $usuario = "root";
        $contrasena = "";
        $conexion = new PDO($dns, $usuario, $contrasena, $opc);
        return $conexion;
    }

    public static function ejecutaConsulta($sql) {
        $conexion = self::conexion(); //Recibo un objeto conexión
        $resultado = null;
        if (isset($conexion)) {
            $resultado = $conexion->query($sql);
        }
        return $resultado;
    }

    public static function realizaUpdate($sql) {
        $conexion = self::conexion();
        if (isset($conexion)) {
            $count = $conexion->exec($sql);
        }
        return $count;
    }

}
