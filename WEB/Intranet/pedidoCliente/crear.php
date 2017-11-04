<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include_once '../../../PHP/BD/pedidoClienteBD.php';
        include_once '../../../PHP/BD/ClienteBD.php';
        include_once '../../../PHP/BD/EmpleadoBD.php';


        if (isset($_POST['insertar'])) {
            $row[0] = $_POST['fechaPedido'];
            $row[1] = $_POST['cliente_idCliente'];
            $row[2] = $_POST['empleado_idEmpleado'];

            pedidoClienteBD::insertarPedidoCliente($row);
        }
        ?>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del pedidoCliente: </label> <br/>
            Fecha: <input type="text" name="fechaPedido" /><br/>
            Cliente: 
            <select name="cliente_idCliente">  
                <?php
                $todos = clienteBD::listarTodos();
                foreach ($todos as $id) {
                    echo "<option value=" . $id->getIdCliente() . ">" . $id->getNombreCliente() . "</option>";
                }
                ?>   
            </select>
            <br> 
                Empleado:
                <select name="empleado_idEmpleado">  
                    <?php
                    $todos1 = empleadoBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value=" . $id->getIdEmpleado() . ">" . $id->getIdEmpleado() . "</option>";
                    }
                    ?>   
                </select>
                <br/>
                <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Ir a listar</a>
    </body>
</html>

