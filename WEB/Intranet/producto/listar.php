<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <?php
            include_once '../../../PHP/BD/productoBD.php';

            $todos = productoBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>idProducto</th><th>nombreProducto</th><th>Descripción</th> <th>Marca</th>"
            . "<th>Precio</th><th>Proveedor</th> <th>Categoria</th> <th>Acciones</th>"
            . "</tr>";

            foreach ($todos as $aux) {
                echo "<tr>"
                . "<td>" . $aux->getIdProducto() . "</td> "
                . "<td>" . $aux->getNombreProducto() . "</td>"
                . "<td>" . $aux->getDescripcion() . "</td>"
                . "<td>" . $aux->getMarca() . "</td>"
                . "<td>" . $aux->getPrecio() . "</td> "
                . "<td>" . $aux->getProveedor_idProveedor() . "</td>"
                . "<td>" . $aux->getCategoria_idCategoria() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdProducto() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdProducto() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <input type='submit' value='crear' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <a href="../../menuIntranet.php">Ir a menú</a>
        </div>
    </body>
</html>