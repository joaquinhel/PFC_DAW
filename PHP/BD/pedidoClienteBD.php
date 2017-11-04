<?php

include_once ('PedidoCliente.php');
include_once ('BD.php');

class pedidoClienteBD {

    public static function listarTodos() {
        $sql = "SELECT idPedido, fechaPedido, cliente_idCliente, empleado_idEmpleado"
                . " from optica.pedidoCliente";
        $resultado = BD::ejecutaConsulta($sql);
        $pedidoCliente = array();
        if ($resultado) {
// Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch(); //Miramos si tiene datos
            while ($row != null) { //Si tiene lo vamos recorriendo
                $pedidoCliente[] = new PedidoCliente($row); //Guardamos en productos los objetos de Producto
                $row = $resultado->fetch();
            }
        }
        return $pedidoCliente;
    }

//Obtener datos de un producto a partir de su nombre
    public static function obtenerDatosPedidoCliente($cod) {
        $sql = "SELECT idPedido, fechaPedido, cliente_idCliente, empleado_idEmpleado"
                . "from optica.pedidoCliente "
                . "where idPedidoCliente=" . $cod;
        $resultado = BD::ejecutaConsulta($sql);
        $pedidoCliente = array();
        if ($resultado) {
            $row = $resultado->fetch();
            $pedidoCliente = new PedidoCliente($row);
        }
        return $pedidoCliente;
    }

//Borrar un producto
    public static function borrarPedidoCliente($cod) {
        $sql = "DELETE from optica.pedidoCliente where idPedido =" . $cod;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Insertar un nuevo producto
    public static function insertarPedidoCliente($row) {
        $sql = "insert into optica.pedidoCliente ("
                . "fechaPedido, cliente_idCliente, empleado_idEmpleado) values ( "
                . " '" . $row[0] . "'"
                . ", '" . $row[1] . "'"
                . ", '" . $row[2] . "' )"
        ;
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

//Actualizar producto
    public static function actualizarPedidoCliente($row) {
        $sql = "update optica.pedidoCliente set "
                . "fechaPedido = '" . $row['fechaPedido'] . "', "
                . "where cliente_idCliente = '" . $row['cliente_idCliente'] . "'"
                . "and empleado_idEmpleado = '" . $row['empleado_idEmpleado'] . "'";
        $numero = BD::realizaUpdate($sql);
        return $numero;
    }

}


