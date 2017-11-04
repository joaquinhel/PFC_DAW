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
        include_once '../../../PHP/BD/proveedorBD.php';
        if (isset($_POST['insertar'])) {
            $row['direccion'] = $_POST['direccion'];
            $row['nombreEmpresa'] = $_POST['nombreEmpresa'];
            $row['personaContacto'] = $_POST['personaContacto'];
            proveedorBD::insertarProveedor($row);
        }
        ?>
        <h2>INTRODUCIR UN NUEVO PROVEEDOR</h2>

        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Introduzca los datos del proveedor: </p>
            <label>Dirección: </label><input type="text" name="direccion" /><br/>
            <label>Nombre Empresa: </label><input type="text" name="nombreEmpresa"/><br/>
            <label>Persona de Contacto: </label><input type="text" name="personaContacto"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
            <a href="listar.php">Volver al listado de proveedores</a>&emsp;
            <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
        </form> 

    </body>
</html>

