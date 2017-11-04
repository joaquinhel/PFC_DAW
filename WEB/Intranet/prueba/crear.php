<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include_once '../../../PHP/BD/pruebaBD.php';
        if (isset($_POST['insertar'])) {
            $row['nombrePrueba'] = $_POST['nombrePrueba'];
            $row['aparatosNecesarios'] = $_POST['aparatosNecesarios'];
            pruebaBD::insertarPrueba($row);
        }
        ?>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del prueba: </label> <br/>
            Nombre Prueba: <input type="text" name="nombrePrueba"/><br/>
            Instrumental: <input type="text" name="aparatosNecesarios"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Volver al listado de pruebas</a>&emsp;
        <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
    </body>
</html>

