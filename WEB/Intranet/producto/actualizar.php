<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/productoBD.php';
include_once '../../../PHP/BD/proveedorBD.php';
include_once '../../../PHP/BD/categoriaBD.php';
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
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
                    $_SESSION['id'] = $_GET['id'];
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaProducto()'>";
                    echo "<p>LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <p />";
                    echo "<input type = 'hidden' name = 'idProducto' maxlength='4' value = " . $todos->getIdProducto() . "> <br />";
                    echo "<label for='nombre'>* NOMBRE </label> <br/>";
                    echo "<input type = 'text' name = 'nombreProducto' id='nombre' required maxlength='40' value = " . $todos->getNombreProducto() . "><br />";
                    echo "<label for='descripcion'>DESCRIPCIÓN </label> <br/>";
                    echo "<input type = 'text' name = 'descripcion' id='descripcion' maxlength='45' value = " . $todos->getDescripcion() . "><br />";
                    echo "<label for='marca'>* MARCA </label> <br/>";
                    echo "<input type = 'text' name = 'marca' id='marca' required maxlength='45' value = " . $todos->getMarca() . "><br />";
                    echo "<label for ='precio'>* PRECIO </label> <br/>";
                    echo "<input type = 'text' name = 'precio' id='precio' required maxlength='7' value = " . $todos->getPrecio() . "><br />";
                    //////////////////////////////////////////////////////////////////
                    echo "<label for='idProveedor'>* ID_PROVEEDOR: </label><br/>";
                    echo "<select name='proveedor_idProveedor' id='idProveedor'>";
                    $todos1 = proveedorBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value = " . $id->getIdProveedor() . ">" . $id->getNombreEmpresa() . "</option>";
                    }
                    echo "</select><br/> ";
                    /////////////////////////////////////////////////////////////////
                    echo "<label for = 'idCategoria'>* ID_CATEGORIA: </label><br/>";
                    echo "<select name = 'categoria_idCategoria' id='idCategoria'>";
                    $todos2 = categoriaBD::listarTodos();
                    foreach ($todos2 as $id) {
                        echo "<option value = " . $id->getIdCategoria() . ">" . $id->getNombreCategoria() . "</option>";
                    }
                    echo "</select><br/>";
                    /* Cambio el tipo de seleccion
                      echo "<label for = 'proveedor'>* ID_PROVEEDOR </label> <br/>";
                      echo "<input type = 'text' name = 'proveedor_idProveedor' id = 'proveedor' required value = " . $todos->getProveedor_idProveedor() . "><br />";
                      echo "<label for = 'categoria'>* ID_CATEGORIA </label> <br/>";
                      echo "<input type = 'text' name = 'categoria_idCategoria' id = 'categoria' required value = " . $todos->getCategoria_idCategoria() . "><br />";
                      echo "<br/>"; */
                    echo "<input type = 'submit' value = 'Actualizar' id = 'actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de productos </a> &emsp;
                            &emsp;
                            ";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idProducto'] = $_POST['idProducto'];
                    $row['nombreProducto'] = $_POST['nombreProducto'];
                    $row['descripcion'] = $_POST['descripcion'];
                    $row['marca'] = $_POST['marca'];
                    $row['precio'] = $_POST['precio'];
                    $row['proveedor_idProveedor'] = $_POST['proveedor_idProveedor'];
                    $row['categoria_idCategoria'] = $_POST['categoria_idCategoria'];

                    global $js; //Variable para controlar si entra o no al js
                    $js = 0;
                    echo "<noscript>"; //Cuando está desactivado javascript
                    $js = 1;
                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarEntradaProducto($row);
                    if ($validar) {
                        productoBD::actualizarProducto($row);
                    }
                    echo "</noscript>";
                    if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                        productoBD::actualizarProducto($row);
                    }
                    unset($_POST ['actualizar']);
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    echo "<a href = 'actualizar.php?id=" . $_SESSION['id'] . "'>Pulse para volver</a>";
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
