<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
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
            <input type='submit' value='crear' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <a href="../../menuIntranet.php">Ir a menú</a>
        </div>
    </body>
</html>