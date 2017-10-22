<?php

require 'BD.php';

class Proveedor {

    public static function obtienerProveedores() {
        $sql = "SELECT id_proveedor, nombreEmpresa,personaContacto, direccion FROM proveedor";
        $resultado = BD::ejecutaConsulta($sql);
        $proveedor = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch();
            while ($row != null) {
                $proveedor[] = new Proveedor($row);
                $row = $resultado->fetch();
            }
        }
        return $productos;
    }

    /* $idProveedor;
      $nombreEmpresa;
      $personaContacto;
      $direccion; */
}
