<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/productoBD.php';
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?>   
            <div id='centro'>
                <h2> Modificar los datos guardados de un producto </h2>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = productoBD::obtenerDatosProducto($_GET['id']);
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaProducto()'>";
                    echo "<p>LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <p />";
                    echo "<input type = 'hidden' name = 'idProducto' maxlength='4' value = " . $todos->getIdProducto() . "> <br />";
                    echo "<label>* NOMBRE </label> <br/>";
                    echo "<input type = 'text' name = 'nombreProducto' id='nombre' required maxlength='40' value = " . $todos->getNombreProducto() . "><br />";
                    echo "<label>DESCRIPCIÓN </label> <br/>";
                    echo "<input type = 'text' name = 'descripcion' id='nombre' maxlength='45' value = " . $todos->getDescripcion() . "><br />";
                    echo "<label>* MARCA </label> <br/>";
                    echo "<input type = 'text' name = 'marca' id='marca' required maxlength='45' value = " . $todos->getMarca() . "><br />";
                    echo "<label>* PRECIO </label> <br/>";
                    echo "<input type = 'text' name = 'precio' id='precio' required maxlength='7' value = " . $todos->getPrecio() . "><br />";
                    echo "<label>* ID_PROVEEDOR </label> <br/>";
                    echo "<input type = 'text' name = 'proveedor_idProveedor' id='proveedor' required value = " . $todos->getProveedor_idProveedor() . "><br />";
                    echo "<label>* ID_CATEGORIA </label> <br/>";
                    echo "<input type = 'text' name = 'categoria_idCategoria' id='categoria' required value = " . $todos->getCategoria_idCategoria() . "><br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de productos </a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
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
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    unset($_POST['actualizar']);
                }
                ?>
            </div>
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>
