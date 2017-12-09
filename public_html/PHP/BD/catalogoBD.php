<?php

class catalogoBD {

    public static function catalogo() {
// Datos de la base de datos.
        $servidor = "localhost";
        $usuarioBD = "root";
        $passwordBD = "";
        $baseDatos = "optica";


        $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);
        $consulta = "SELECT archivo, directorio FROM galeriaimagenes ORDER BY id";
        $resultado = $conexion->query($consulta);
        return $resultado;
    }

}
