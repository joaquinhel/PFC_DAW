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
            include_once '../../../PHP/BD/usuarioBD.php';
            $todos = usuarioBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Login</th><th>Pass</th><th>fecha_alta</th> </tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdUsuario() . "</td>"
                . "<td>" . $aux->getLogin() . "</td>"
                . "<td>" . $aux->getPass() . "</td>"
                . "<td>" . $aux->getFecha_alta() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdUsuario() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdUsuario() . "'>Borrar</a></tr>";
            }
            echo "</table>";

            if (isset($_POST['enviar'])) {
                usuarioBD::borrarUsuario($_POST['id']);
                echo "El registro se ha borrado";
            }
            ?>

            INTRODUZCA EL IDENTIFICADOR DEL PRODUCTO A BORRAR
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type='text' name='id'/>
                <input type='submit' name='enviar' value='enviar'/>
            </form>
            <a href="listar.php">Ir a listar</a>
        </div>
    </body>
</html>
