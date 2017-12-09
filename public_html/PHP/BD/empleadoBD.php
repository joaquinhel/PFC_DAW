<?php

include_once ('Empleado.php');
include_once ('BD.php');

class empleadoBD {

    public static function listarTodos() {
        $sql = "SELECT idEmpleado, nombreEmpleado, apellidos,direccion, telefono,"
                . " email, fechaContratacion, sueldo, nif, estado"
                . " from optica.empleado";
        $resultado = BD::ejecutaConsulta($sql);
        $empleados = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $empleados[] = new Empleado($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $empleados;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosEmpleado($cod) {
        $sql = "SELECT idEmpleado, nombreEmpleado, apellidos,direccion, telefono, "
                . "email, fechaContratacion, sueldo, nif, estado "
                . "from optica.empleado "
                . "where idEmpleado=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $empleado = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $empleado = new Empleado($row);
        }
        return $empleado;
    }

//Borrar un producto
    public static function borrarEmpleado($cod) {
        $sql = "DELETE from optica.empleado where idEmpleado =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarEmpleado($row) {
        $sql = "insert into optica.empleado (nombreEmpleado, apellidos, direccion, telefono, "
                . "email, fechaContratacion, sueldo, nif, estado) values ( "
                . " '" . $row['nombreEmpleado'] . "'"
                . ", '" . $row['apellidos'] . "'"
                . ", '" . $row['direccion'] . "'"
                . ", '" . $row['telefono'] . "'"
                . ", '" . $row['email'] . "'"
                . ", '" . $row['fechaContratacion'] . "'"
                . ", '" . $row['sueldo'] . "'"
                . ", '" . $row['nif'] . "'"
                . ", '" . $row['estado'] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarEmpleado($row) {
        $sql = "update optica.empleado set "
                . "nombreEmpleado='" . $row['nombreEmpleado'] . "' , "
                . "apellidos='" . $row['apellidos'] . "', "
                . "direccion = '" . $row['direccion'] . "', "
                . "telefono = '" . $row['telefono'] . "', "
                . "email = '" . $row['email'] . "', "
                . "fechaContratacion = '" . $row['fechaContratacion'] . "', "
                . "sueldo = '" . $row['sueldo'] . "', "
                . "nif = '" . $row['nif'] . "', "
                . "estado = '" . $row['estado'] . "'"
                . "where idEmpleado = '" . $row['idEmpleado'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}
