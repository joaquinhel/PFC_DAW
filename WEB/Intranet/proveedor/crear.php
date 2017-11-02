<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del proveedor: </label> <br/>
            Dirección: <input type="text" name="direccion" /><br/>
            Nombre Empresa: <input type="text" name="nombreEmpresa"/><br/>
            Persona de Contacto: <input type="text" name="personaContacto"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Ir a listar</a>
    </body>
</html>

