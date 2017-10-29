<?php
require_once 'Proveedor.php';
include_once 'BD.PHP';

class proveedorBD {

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
        return $proveedor;
    }

    /* $idProveedor;
      $nombreEmpresa;
      $personaContacto;
      $direccion; */
}
