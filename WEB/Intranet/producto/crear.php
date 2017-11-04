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
        include_once '../../../PHP/BD/productoBD.php';
        include_once '../../../PHP/BD/proveedorBD.php';
        include_once '../../../PHP/BD/categoriaBD.php';
        if (isset($_POST['insertar'])) {
            $row['nombreProducto'] = $_POST['nombreProducto'];
            $row['descripcion'] = $_POST['descripcion'];
            $row['marca'] = $_POST['marca'];
            $row['precio'] = $_POST['precio'];
            $row['proveedor_idProveedor'] = $_POST['proveedor_idProveedor'];
            $row['categoria_idCategoria'] = $_POST['categoria_idCategoria'];
            productoBD::insertarProducto($row);
        }
        ?>
        <h2>INTRODUCIR UN NUEVO PRODUCTO</h2>
        
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Introduzca los datos del producto: </label> <p/>
                <label>Nombre: </label> <input type="text" name="nombreProducto" /><br/>
                <label>Descripción: </label><input type="text" name="descripcion"/><br/>
                <label>Marca: </label><input type="text" name="marca"/><br/>
                <label>Precio: </label><input type="text" name="precio" /><br/>
                <label>ID_proveedor: </label>
                <select name="proveedor_idProveedor">  
                    <?php
                    $todos1 = proveedorBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value=" . $id->getIdProveedor() . ">" . $id->getNombreEmpresa() . "</option>";
                    }
                    ?>   
                </select><br> 

                    <label>ID_categoria: </label>
                    <select name="categoria_idCategoria">    
                        <?php
                        $todos2 = categoriaBD::listarTodos();
                        foreach ($todos2 as $id) {
                            echo "<option value=" . $id->getIdCategoria() . ">" . $id->getNombreCategoria() . "</option>";
                        }
                        ?>  
                    </select><br> 

                        <input type="submit" name="insertar" value="Introducir Nuevo"/>
                        <a href="listar.php">Volver al listado</a>

                        </form> 
                        </body>
                        </html>

