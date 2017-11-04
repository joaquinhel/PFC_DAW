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
        include_once '../../../PHP/BD/pruebaClienteBD.php';
        include_once '../../../PHP/BD/clienteBD.php';
        include_once '../../../PHP/BD/pruebaBD.php';
        if (isset($_POST['insertar'])) {
            $row[0] = $_POST['cliente_idCliente'];
            $row[1] = $_POST['prueba_idPrueba'];
            $row[2] = $_POST['fechaPrueba'];
            $row[3] = $_POST['diagnostico'];

            pruebaClienteBD::insertarPruebaCliente($row);
        }
        ?>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del prueba: </label> <br/>
            Cliente: <select name="cliente_idCliente">  
                <?php
                $todos1 = clienteBD::listarTodos();
                foreach ($todos1 as $id) {
                    echo "<option value=" . $id->getIdCliente() . ">" . $id->getNif() . "</option>";
                }
                ?>   
            </select>
            <br/>
            Prueba:<select name="prueba_idPrueba">  
                <?php
                $todos1 = pruebaBD::listarTodos();
                foreach ($todos1 as $id) {
                    echo "<option value=" . $id->getIdPrueba() . ">" . $id->getNombrePrueba() . "</option>";
                }
                ?>   
            </select><br/>

            Fecha: <input type="text" name="fechaPrueba"/><br/>           
            Diagnostico: <input type="text" name="diagnostico"/><br/>
            <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Volver al listado de pruebas - clientes </a>&emsp;
        <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
    </body>
</html>

