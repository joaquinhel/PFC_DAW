<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include_once '../../../PHP/BD/clienteBD.php';
        if (isset($_POST['insertar'])) {
            $row[0] = $_POST['nombre'];
            $row[1] = $_POST['apellidos'];
            $row[2] = $_POST['direccion'];
            $row[3] = $_POST['telefono'];
            $row[4] = $_POST['nif'];
            clienteBD::insertarCliente($row);
        }
        ?>
        <h2>INTRODUCIR UN NUEVO CLIENTE</h2>

        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Introduzca los datos del cliente </p>
            <label>Nombre: </label><input type="text" name="nombre" /><br/>
            <label>Apellidos: </label><input type="text" name="apellidos"/><br/>
            <label>Dirección: </label><input type="text" name="direccion"/><br/>
            <label>Teléfono: </label> <input type="text" name="telefono"/><br/>
            <label>NIF: </label> <input type="text" name="nif"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/><br /><br />
            <a href="listar.php">Volver al listado de clientes</a>&emsp;
            <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
        </form> 
    </body>
</html>

