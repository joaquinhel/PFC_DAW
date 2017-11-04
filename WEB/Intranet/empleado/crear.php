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
        include_once '../../../PHP/BD/empleadoBD.php';
        if (isset($_POST['insertar'])) {
            $row[0] = $_POST['nombreEmpleado'];
            $row[1] = $_POST['apellidos'];
            $row[2] = $_POST['direccion'];
            $row[3] = $_POST['telefono'];
            $row[4] = $_POST['email'];
            $row[5] = $_POST['fechaContratacion'];
            $row[6] = $_POST['sueldo'];
            empleadoBD::insertarEmpleado($row);
        }
        ?>
        <h2>INTRODUCIR UN NUEVO EMPLEADO</h2>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Introduzca los datos del empleado: </p>
            <label>Nombre:  </label><input type="text" name="nombreEmpleado" /><br/>
            <label>Apellidos:  </label><input type="text" name="apellidos"/><br/>
            <label>Dirección:  </label><input type="text" name="direccion"/><br/>
            <label>Teléfono:  </label><input type="text" name="telefono"/><br/>
            <label>Email:  </label><input type="text" name="email"/><br/>
            <label>Fecha de Contratacion:  </label><input type="text" name="fechaContratacion"/><br/>
            <label>Sueldo:  </label><input type="text" name="sueldo"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
            <a href="listar.php">Volver al listado</a>
        </form> 
    </body>
</html>

