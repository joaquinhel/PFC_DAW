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
            $row[0] = $_POST['idPrueba'];
            $row[1] = $_POST['nombrePrueba'];
            $row[2] = $_POST['aparatosNecesarios'];
            pruebaBD::insertarPrueba($row);
        }
        ?>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del prueba: </label> <br/>
            ID: <input type="text" name="idPrueba" /><br/>
            Nombre: <input type="text" name="nombrePrueba"/><br/>
            Aparatos: <input type="text" name="aparatosNecesarios"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Ir a listar</a>
    </body>
</html>

