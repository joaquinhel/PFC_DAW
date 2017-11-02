<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
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
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del usuario: </label> <br/>
            Login: <input type="text" name="login"/><br/>
            Pass: <input type="text" name="pass"/><br/>
            Fecha de Alta: <input type="text" name="fecha_alta"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Ir a listar</a>
    </body>
</html>

