<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/productoBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>   
        <h2> Modificar los datos guardados de un producto </h2>
        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = productoBD::obtenerDatosProducto($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "<p>LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <p />";
            echo "<label>ID </label> <br/>";
            echo "<input type = 'text' name = 'idProducto' value = " . $todos->getIdProducto() . "> <br />";
            echo "<label>NOMBRE </label> <br/>";
            echo "<input type = 'text' name = 'nombreProducto' value = " . $todos->getNombreProducto() . "><br />";
            echo "<label>DESCRIPCIÓN </label> <br/>";
            echo "<input type = 'text' name = 'descripcion' value = " . $todos->getDescripcion() . "><br />";
            echo "<label>MARCA </label> <br/>";
            echo "<input type = 'text' name = 'marca' value = " . $todos->getMarca() . "><br />";
            echo "<label>PRECIO </label> <br/>";
            echo "<input type = 'text' name = 'precio' value = " . $todos->getPrecio() . "><br />";
            echo "<label>ID_PROVEEDOR </label> <br/>";
            echo "<input type = 'text' name = 'proveedor_idProveedor' value = " . $todos->getProveedor_idProveedor() . "><br />";
            echo "<label>ID_CATEGORIA </label> <br/>";
            echo "<input type = 'text' name = 'categoria_idCategoria' value = " . $todos->getCategoria_idCategoria() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idProducto'] = $_POST['idProducto'];
            $row['nombreProducto'] = $_POST['nombreProducto'];
            $row['descripcion'] = $_POST['descripcion'];
            $row['marca'] = $_POST['marca'];
            $row['precio'] = $_POST['precio'];
            $row['proveedor_idProveedor'] = $_POST['proveedor_idProveedor'];
            $row['categoria_idCategoria'] = $_POST['categoria_idCategoria'];
            productoBD::actualizarProducto($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>
