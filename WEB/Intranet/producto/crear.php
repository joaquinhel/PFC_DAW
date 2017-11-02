<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include_once '../../../PHP/BD/productoBD.php';
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
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Introduzca los datos del producto: </label> <br/>
            Nombre: <input type="text" name="nombreProducto" /><br/>
            Descripción: <input type="text" name="descripcion"/><br/>
            Marca: <input type="text" name="marca"/><br/>
            Precio: <input type="text" name="precio" /><br/>
            ID_proveedor: <select name="proveedor_idProveedor">    
                <option value="SanMiguel">San Miguel</option>    
                <option value="Mahou">Mahou</option>    
                <option value="Heineken">Heineken</option>    
                <option value="Carlsberg">Carlsberg</option>    
                <option value="Aguila">Aguila</option>   
            </select><br> 

                ID_categoria:<select name="proveedor_idProveedor">    
                    <option value="SanMiguel">San Miguel</option>    
                    <option value="Mahou">Mahou</option>    
                    <option value="Heineken">Heineken</option>    
                    <option value="Carlsberg">Carlsberg</option>    
                    <option value="Aguila">Aguila</option>   
                </select><br> 

                    <input type="submit" name="insertar" value="Introducir Nuevo"/>
                    </form> 
                    <a href="listar.php">Ir a listar</a>
                    </body>
                    </html>

