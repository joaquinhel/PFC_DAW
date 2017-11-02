<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/productoBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = productoBD::obtenerDatosProducto($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL PROVEEDOR A MODIFICAR SON: <br />";
            echo "ID <input type = 'text' name = 'idProducto' value = " . $todos->getIdProducto() . "> <br />";
            echo "NOMBRE <input type = 'text' name = 'direccion' value = " . $todos->getNombreProducto() . "><br />";
            echo "DESCRIPCIÓN <input type = 'text' name = 'nombreEmpresa' value = " . $todos->getDescripcion() . "><br />";
            echo "MARCA <input type = 'text' name = 'marca' value = " . $todos->getMarca() . "><br />";
            echo "PRECIO <input type = 'text' name = 'precio' value = " . $todos->getPrecio() . "><br />";
            echo "ID_PROVEEDOR <input type = 'text' name = 'proveedor_idProveedor' value = " . $todos->getProveedor_idProveedor() . "><br />";
            echo "ID_CATEGORIA <input type = 'text' name = 'categoria_idCategoria' value = " . $todos->getCategoria_idCategoria() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idProducto'] = $_POST['idProducto'];
            $row['nombreProducto'] = $_POST['nombreProducto'];
            $row['descripción'] = $_POST['descripción'];
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
