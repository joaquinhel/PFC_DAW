<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include_once '../../../PHP/BD/compraBD.php';
        include_once '../../../PHP/BD/proveedorBD.php';

        if (isset($_POST['insertar'])) {
            $row[0] = $_POST['fechaEmision'];
            $row[1] = $_POST['fechaVencimiento'];
            $row[2] = $_POST['proveedor_idProveedor'];
            compraBD::insertarCompra($row);
        }
        ?>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del compra: </label> <br/>
            Fecha Emisión: <input type="text" name="fechaEmision" /><br/>
            Fecha Vencimiento: <input type="text" name="fechaVencimiento" /><br/>

            <br> 
                Empleado:
                <select name="proveedor_idProveedor">  
                    <?php
                    $todos1 = proveedorBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value=" . $id->getIdProveedor() . ">" . $id->getNombreEmpresa() . "</option>";
                    }
                    ?>   
                </select>

                <input type="submit" name="insertar" value="Introducir Nuevo"/>
        </form> 
        <a href="listar.php">Ir a listar</a>
    </body>
</html>

