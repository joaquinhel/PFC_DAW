<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
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
            <div id="error">
            </div>
            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post"
                  onsubmit="return controlarEntradaProducto()()">
                <p>Introduzca los datos del producto: </label> <p/>
                    <label for="nombre">* Nombre: </label>
                    <input type="text" name="nombreProducto" id="nombre" maxlength='45' required /><br/>
                    <label for="descripcion">Descripción: </label>
                    <input type="text" name="descripcion" id="descripcion" maxlength='45'/><br/>
                    <label for="marca">* Marca: </label>
                    <input type="text" name="marca" id="marca" maxlength='45' required/><br/>
                    <label for="precio">* Precio: </label>
                    <input type="text" name="precio" id="precio" maxlength='7' required/><br/>
                    <label for="idProveedor">* ID_proveedor: </label>
                    <select name="proveedor_idProveedor" id="idProveedor">  
                        <?php
                        $todos1 = proveedorBD::listarTodos();
                        foreach ($todos1 as $id) {
                            echo "<option value=" . $id->getIdProveedor() . ">" . $id->getNombreEmpresa() . "</option>";
                        }
                        ?>   
                    </select><br/> 

                    <label for="idCategoria">* ID_categoria: </label>
                    <select name="categoria_idCategoria" id="idCategoria">    
                        <?php
                        $todos2 = categoriaBD::listarTodos();
                        foreach ($todos2 as $id) {
                            echo "<option value=" . $id->getIdCategoria() . ">" . $id->getNombreCategoria() . "</option>";
                        }
                        ?>  
                    </select><br/> 

                    <input type="submit" name="insertar" value="Introducir Nuevo"/><br/>
                    <a href="listar.php">Volver al listado de productos </a>&emsp;
                    <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
            </form> 
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>

