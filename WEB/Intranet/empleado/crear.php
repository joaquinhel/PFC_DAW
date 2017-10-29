<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include_once '../../../PHP/BD/empleadoBD.php';
        if (isset($_POST['insertar'])) {
            $row[0] = $_POST['nombre'];
            $row[1] = $_POST['apellidos'];
            $row[2] = $_POST['direccion'];
            $row[3] = $_POST['telefono'];
            $row[4] = $_POST['email'];
            $row[5] = $_POST['fechaContratacion'];
            $row[6] = $_POST['sueldo'];
            empleadoBD::insertarEmpleado($row);
        }
        ?>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del empleado: </label> <br/>
            Nombre: <input type="text" name="nombre" /><br/>
            Apellidos: <input type="text" name="apellidos"/><br/>
            Dirección: <input type="text" name="direccion"/><br/>
            Teléfono: <input type="text" name="telefono"/><br/>
            Email: <input type="text" name="email"/><br/>
            FechaContratacion: <input type="text" name="fechaContratacion"/><br/>
            Sueldo: <input type="text" name="sueldo"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Ir a listar</a>
    </body>
</html>

