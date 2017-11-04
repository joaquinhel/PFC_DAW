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
        include_once '../../../PHP/BD/categoriaBD.php';
        if (isset($_POST['insertar'])) {
            categoriaBD::insertarCategoria($_POST['nombre']);
        }
        ?>
        <h2>CREAR UNA NUEVA CATEGORIA</h2>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Introduzca los datos de la categoria </p>
            <label>Nombre: </label> <input type="text" name="nombre"><br/><br/>
                <input type="submit" name="insertar" value="Grabar en Registro"/> <br /><br />
                <a href="listar.php">Volver al listado de categorias</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>    
        </form> 
    </body>
</html>
