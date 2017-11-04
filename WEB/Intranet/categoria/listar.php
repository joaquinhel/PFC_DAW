<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Listado de categorias</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <h1>LISTADO DE CATEGORIAS DE CATEGORIAS</h1>
            <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <?php
            include_once '../../../PHP/BD/categoriaBD.php';
            $todos = categoriaBD::listarTodos();
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdCategoria() . "</td> <td>" . $aux->getNombreCategoria() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdCategoria() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdCategoria() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <br>
                <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
        </div>
    </body>
</html>