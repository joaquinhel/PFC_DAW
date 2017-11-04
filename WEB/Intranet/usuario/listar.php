<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <h1>LISTADO DE CATEGORIAS DE CATEGORIAS</h1>
            <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <?php
            include_once '../../../PHP/BD/usuarioBD.php';
            $todos = usuarioBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Login</th><th>Pass</th><th>fecha_alta</th> <th>Acciones</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdUsuario() . "</td>"
                . "<td>" . $aux->getLogin() . "</td>"
                . "<td>" . $aux->getPass() . "</td>"
                . "<td>" . $aux->getFecha_alta() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdUsuario() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdUsuario() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <br>
                <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
        </div>
    </body>
</html>