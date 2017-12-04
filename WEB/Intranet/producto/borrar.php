<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>BORRAR PRODUCTO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
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
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1> BORRAR UN PRODUCTO </h1>
                    <p> Introduzca el id del producto a borrar </p>
                    <label>ID categoria</label><input type='text' name='id' maxlength='4'/><br/>
                    <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                </form>

                <?php
                include_once '../../../PHP/BD/productoBD.php';
                if (isset($_POST['enviar'])) {
                    productoBD::borrarProducto($_POST['id']);
                    echo "El registro se ha borrado";
                }
                echo "<h1>LISTADO DE PRODUCTOS</h1 >";
                $todos = productoBD::listarTodos();
                echo "<table border=1px>";
                echo "<tr><th>idProducto</th><th>nombreProducto</th><th>Descripción</th> <th>Marca</th>"
                . "<th>Precio</th><th>proveedor_idProveedor</th> <th>categoria_idCategoria</th> <th>Acciones</th>"
                . "</tr>";

                foreach ($todos as $aux) {
                    echo "<tr>"
                    . "<td>" . $aux->getIdProducto() . "</td> "
                    . "<td>" . $aux->getNombreProducto() . "</td>"
                    . "<td>" . $aux->getDescripcion() . "</td>"
                    . "<td>" . $aux->getMarca() . "</td>"
                    . "<td>" . $aux->getPrecio() . "</td> "
                    . "<td>" . $aux->getProveedor_idProveedor() . "</td>"
                    . "<td>" . $aux->getCategoria_idCategoria() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdProducto() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdProducto() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>

                <a href="listar.php">Volver al listado de productos</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
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
