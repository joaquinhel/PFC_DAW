<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <?php
            include_once '../../../PHP/BD/compraBD.php';

            $todos = compraBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Fecha de Emisión</th><th>Fecha de Vencimiento</th>"
            . "<th>Proveedor</th><th>Detalle</th><th>Acciones</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdcompra() . "</td> <td>" . $aux->getFechaEmision() . "</td>"
                . "<td>" . $aux->getFechaVencimiento() . "</td><td>" . $aux->getProveedor_idProveedor() . "</td>"
                . "<td><a href='..\detalleCompra\listar.php?id=" . $aux->getIdCompra() . "'>Editar</a></td> "
                . "<td> <a href='actualizar.php?id=" . $aux->getIdCompra() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdCompra() . "'>Borrar</a></tr>";
            }
            echo "</table>";

            if (isset($_POST['enviar'])) {
                compraBD::borrarCompra($_POST['id']);
                echo "El registro se ha borrado";
            }
            ?>

            INTRODUZCA EL IDENTIFICADOR DE LA COMPRA A BORRAR
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type='text' name='id'/>
                <input type='submit' name='enviar' value='enviar'/>
            </form>
            <a href="listar.php">Ir a listar</a>
        </div>
    </body>
</html>
