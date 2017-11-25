<?php

class Validaciones {

    public static function controlarEntradaCategoria($nombre) {
        $error = false;
        //echo gettype($nombre);
        if (gettype($nombre) == 'array') {
            $nombre = implode($nombre);
        }

        if ($nombre == "") {
            echo "<h4>Los campos marcados con * son obligatorios</h4>";
            $error = true;
        } else if ((strlen($nombre) < 3) || is_numeric($nombre)) {
            echo "<h4>El dato introducido no es correcto</h4>";
            $error = true;
        }
        if ($error == true) {
            return false;
        } else {
            echo "<h4>El registro ha sido grabado correctamente</h4>";
            return true;
        }
    }

//!is_numeric--> Si introduzco una letra se evalua a false
//Debemos usar .append y no .html ya que sino solo nos sadrá el último mensaje de error
    public static function controlarEntradaEmpleado($row) { //No hacen falta parámetros usamos las variables
        $error = false;

        $nombre = $row['nombreEmpleado'];
        $apellido = $row['apellidos'];
        $email = $row['email'];
        $telefono = $row['telefono'];
        $sueldo = $row['sueldo'];
        $dni = $row['nif'];
        $direccion = $row['direccion'];

        if ($nombre == "" || $apellido == "" || $email == "" || $telefono == "" || $sueldo == "") {
            echo "<h4>Los campos marcados con * son obligatorios </h4>";
            $error = true;
        } else if (!is_numeric($sueldo) || !is_numeric($telefono)) {
            echo "<h4> El campo de sueldo y telefono deben ser númerico</h4>";
            $error = true;
        } else if (strlen($telefono) < 9) {
            echo "<h4> El campo teléfono debe tener 9 dígitos</h4>";
            $error = true;
        } else if (strlen($nombre) < 3 || strlen($apellido) < 3 || strlen($nombre) > 50 || strlen($apellido) > 50) {
            echo "<h4>Los campos de nombre apellido solo aceptan valores entre 3 y 50 caracteres</h4>";
            $error = true;
        } else if (self::validarEmail($email) == false) {
            echo "<h4>El email introducido es incorrecto</h4>";
            $error = true;
        } else if (self::validarNIF($dni) == false) {
            echo "<h4> El dni introducido es incorrecto </h4>";
            $error = true;
        } else if ($direccion != "") {
            if (strlen($direccion) < 5 || is_numeric($direccion)) {
                echo "La dirección introducida no es correcta";
                $error = true;
            }
        } else if ($email != "") {
            if (strlen($email) < 5 || !is_numeric($email))
                echo "<h4> El email introducido no es correcto </h4>";
            $error = true;
        }
        return !$error;
    }

    public static function controlarEntradaCliente($row) { //No hacen falta parámetros usamos las variables
        $error = false;
        $nombre = $row['nombreCliente'];
        $apellido = $row['apellidos'];
        $dni = $row['nif'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $email = $row['email'];

        if ($nombre == "" || $apellido == "" || $email == "" || $telefono == "") {
            echo "<h4>Los campos marcados con * son obligatorios</h4>)";
            $error = true;
        } else if (!is_numeric($telefono) || strlen($telefono) != '9') {
            echo "<h4>El campo teléfono deben ser númerico y tener 9 dígitos</h4>";
            $error = true;
        } else if (strlen($nombre) < 3 || strlen($apellido) < 3 || strlen($nombre) > 50 || strlen($apellido) > 50) {
            echo "<h4>Los campos de nombre apellido solo aceptan valores entre 3 y 50 caracteres</h4>";
            $error = true;
        } else if (is_numeric($nombre) || is_numeric($apellido)) {
            echo "<h4>El campo nombre y apellido no pueden ser númerico</h4>";
            $error = true;
        } else if (self::validarEmail($email) == false) {
            echo "<h4>Introduzca un email correcto</h4>";
            $error = true;
        } else if (self::validarNIF($dni) == false) {
            echo "El dni introducido es incorrecto";
            $error = true;
        } else if ($direccion != "") {
            if (strlen($direccion) < 5 || is_numeric($direccion)) {
                echo "<h4>La dirección introducida no es correcta</h4>";
                $error = true;
            }
            return !$error;
        }
    }

    public static function controlarEntradaProducto($row) {
        $nombre = $row['nombreProducto'];
        $descripcion = $row['descripcion'];
        $marca = $row['marca'];
        $precio = $row['precio'];
        $error = false;

        if ($nombre == "" || $marca == "" || $precio == "") {
            echo "<h4>Los campos marcados con * son obligatorios</h4>";
            $error = true;
        } else if (!is_numeric($precio)) {
            echo "<h4>El campo precio debe ser númerico</h4>";
            $error = true;
        } else if (strlen($nombre) < 3 || strlen($marca) < 3 || strlen($nombre) > 50 || strlen($marca) > 50) {
            echo "<h4>Los campos de nombre y marca solo aceptan valores entre 3 y 50 caracteres</h4>";
            $error = true;
        } else if ($descripcion !== "") {
            if (strlen($descripcion) < 3 || is_numeric($descripcion)) {
                echo "<h4>El campo descipcion no es correcta</h4>";
            }
        } if ($error == false) {
            echo "<h4>Los datos se han guardado correctamente</h4>";
        }
        return !$error;
    }

    public static function controlarEntradaProveedor($row) { //No hacen falta parámetros usamos las variables
        $nombre = $row['nombreEmpresa'];
        $direccion = $row['direccion'];
        $contacto = $row['personaContacto'];
        $cif = $row['cif'];
        $email = $row['email'];
        $telefono = $row['telefono'];
        $error = false;

        if ($nombre == "" || $cif == "" || $email == "" || $telefono == "") {
            echo "<h4>Los campos marcados con * son obligatorios >/h4>";
            $error = true;
        } else if (!is_numeric($telefono)) {
            echo "<h4>El campo teléfono debe ser númerico</h4>";
            $error = true;
        } else if (strlen($nombre) < 3 || strlen($email) < 3 || strlen($nombre) > 50 || strlen($email) > 60) {
            echo "<h4>Los campos de nombre y marca solo aceptan valores entre 3 y 50 caracteres</h4>)";
            $error = true;
        } else if (self::validarCif($cif) == false) {
            echo "<h4>El campo cif es erróneo</h4>";
            $error = true;
        } else if ($contacto != "") {
            if (strlen($contacto) < 3 || is_numeric($contacto)) {
                echo "<h4> El contacto introducido no es correcto</h4>";
                $error = true;
            }
        } else if ($direccion != "") {
            if (strlen($direccion) < 3 || is_numeric($direccion)) {
                echo "<h4>La dirección introducida no es correcta</h4>";
                $error = true;
            }
        }
        if ($error == false) {
            echo "<h4>Los datos se han guardado correctamente</h4>";
        }
        return true;
    }

    public static function controlarEntradaPrueba($row) {
        $nombre = $row['nombrePrueba'];
        $instrumental = $row['aparatosNecesarios'];
        $descripcion = $row['descripcion'];
        $error = false;

        if ($nombre == "" || $instrumental == "" || $descripcion == "") {
            echo "<h4>Los campos marcados con * son obligatorios</h4>";
            $error = true;
        } else if (strlen($nombre) < 3 || strlen($instrumental) < 3 || strlen($nombre) > 50 || strlen($instrumental) > 50) {
            echo "<h4>Los campos de nombre e instrumental solo aceptan valores entre 3 y 50 caracteres </h4>";
            $error = true;
        } else if ($descripcion != "") {
            if (strlen($descripcion) < 3 || is_numeric($descripcion)) {
                echo "<h4> La dirección introducida no es correcta</h4>";
                $error = true;
            }
        }
        if ($error == true) {
            return false;
        } else {
            echo "<h4>El registro ha sido grabado correctamente</h4>";
            return true;
        }
        return !$error;
    }

    public static function controlarEntradaPruebaCliente($row) {
        $fecha = $row['fechaPrueba'];
        $diagnostico = $row['diagnostico'];

        $error = false;

        if ($fecha == "" || $diagnostico == "") {
            echo "<h4>Los campos marcados con * son obligatorios</h4>";
            $error = true;
        } else if (strlen($diagnostico) < 3 || strlen($diagnostico) > 60) {
            echo "</h4>El campo diagnóstico solo acepta valores entre 3 y 60 caracteres </h4>";
            $error = true;
        }
        if ($error == true) {
            return false;
        } else {
            echo "<h4>El registro ha sido grabado correctamente</h4>";
            return true;
        }
        return !$error;
    }

    public static function controlarUsuario($row) { //No hacen falta parámetros usamos las variables
        $nombre = $row['nombre'];
        $login = $row['login'];
        $pass = $row['pass'];
        $fecha = $row['fecha_alta'];

        $error = false;

        if ($nombre == "" || $login == "" || $pass == "" || $fecha == "") {
            echo "<h4> Los campos marcados con * son obligatorios </h4>)";
            $error = true;
        } else if (strlen($nombre) < 3 || strlen($login) < 3 || strlen($email) > 50 ||
                strlen($login) > 50 || strlen($pass) < 3 || strlen($pass) > 50) {
            echo "<h4>Los campos de nombre, login y pass solo aceptan valores entre 3 y 50 caracteres</h4>)";
            $error = true;
        }
        return !$error;
    }

    static function validarNif($dni) {
        if (strlen($dni) < 9) {
            return false;
        }

        $dni = strtoupper($dni);

        $letra = substr($dni, -1, 1);
        $numero = substr($dni, 0, 8);

        // Si es un NIE hay que cambiar la primera letra por 0, 1 ó 2 dependiendo de si es X, Y o Z.
        $numero = str_replace(array('X', 'Y', 'Z'), array(0, 1, 2), $numero);

        $modulo = $numero % 23;
        $letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letra_correcta = substr($letras_validas, $modulo, 1);

        if ($letra_correcta != $letra) {
            return false;
        } else {
            return true;
        }
    }

    static function validarEmail($email) {
        $reg = "/^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$/";
        if (preg_match($reg, $email)) {
            return true;
        } else {
            return false;
        }
    }

    static function validarCif($cif) {
        $reg = "/^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)?[0-9A-Z]|\d{8}(-|\.)?[A-Z])$/";
        if (preg_match($reg, $cif)) {
            return true;
        } else {
            return false;
        }
    }

}
