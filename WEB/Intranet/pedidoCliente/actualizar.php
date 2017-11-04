<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pedidoClienteBD.php';
include_once '../../../PHP/BD/ClienteBD.php';
include_once '../../../PHP/BD/EmpleadoBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = pedidoClienteBD::obtenerDatosPedidoCliente($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL EMPLEADO A MODIFICAR SON: <br />";
            echo "ID PEDIDO <input type = 'text' name = 'idPedido' value = " . $todos->getIdPedido() . "> <br />";
            echo "FECHA DE PEDIDO <input type = 'text' name = 'idPedido' value = " . $todos->getFechaPedido() . "> <br />";
            echo "CLIENTE <input type = 'text' name = 'cliente_idCliente' value = " . $todos->getCliente_idCliente() . "><br />";
            echo "EMPLEADO <input type = 'text' name = 'empleado_idEmpleado' value = " . $todos->getEmpleado_idEmpleado() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['fechaPedido'] = $_POST['fechaPedido'];
            $row['cliente_idCliente'] = $_POST['cliente_idCliente'];
            $row['empleado_idEmpleado'] = $_POST['empleado_idEmpleado'];
            pedidoClienteBD::actualizarPedidoCliente($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>
