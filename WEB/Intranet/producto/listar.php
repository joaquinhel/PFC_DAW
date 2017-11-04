<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>LISTADO DE CATEGORIAS DE PRODUCTOS</h1>
        <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
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
            <br>
                <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
        </div>
    </body>
</html>