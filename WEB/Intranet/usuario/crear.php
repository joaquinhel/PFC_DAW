<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include_once '../../../PHP/BD/usuarioBD.php';
        if (isset($_POST['insertar'])) {
            $row['login'] = $_POST['login'];
            $row['pass'] = $_POST['pass'];
            $row['fecha_alta'] = $_POST['fecha_alta'];
            usuarioBD::insertarUsuario($row);
        }
        ?>
        <h2>INTRODUCIR UN NUEVO USUARIO</h2>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Introduzca los datos del usuario: <p/>
                <label>Login: </label><input type="text" name="login"/><br/>
                <label>Pass: </label><input type="text" name="pass"/><br/>
                <label>Fecha de Alta: </label><input type="text" name="fecha_alta"/><br/>
                <input type="submit" name="insertar" value="Introducir Nuevo"/>
                <a href="listar.php">Volver al listado de usuarios</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
        </form> 
    </body>
</html>

