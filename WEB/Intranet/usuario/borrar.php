<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <h1>LISTADO DE USUARIOS</h1>
            <?php
            include_once '../../../PHP/BD/usuarioBD.php';
            $todos = usuarioBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Login</th><th>Pass</th><th>Fecha de alta</th> <th>Acciones</th></tr>";

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
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <p> INTRODUZCA EL IDENTIFICADOR DEL USUARIO A BORRAR </p>
                <label>ID categoria</label><input type='text' name='id'/><br/>
                <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                <a href="listar.php">Volver al listado de usuarios</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
            </form>
        </div>
    </body>
</html>
