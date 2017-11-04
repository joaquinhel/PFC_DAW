<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <?php
            include_once '../../../PHP/BD/pedidoClienteBD.php';
            $todos = pedidoClienteBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Fecha de Pedido</th><th>Id Cliente</th><th>Id empleado</th> "
            . "<th>Ver Detalle</th><th>Acciones</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdPedido() . "</td> <td>" . $aux->getFechaPedido() . "</td>"
                . "<td>" . $aux->getCliente_idCliente() . "</td><td>" . $aux->getEmpleado_idEmpleado() . "</td>"
                . "<td><a href='..\detallePedido\listar.php?id=" . $aux->getIdPedido() . "'>Editar</a></td> "
                . "<td> <a href='actualizar.php?id=" . $aux->getIdPedido() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPedido() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <input type='submit' value='crear' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <a href="../../menuIntranet.php">Ir a menú</a>
        </div>
    </body>
</html>