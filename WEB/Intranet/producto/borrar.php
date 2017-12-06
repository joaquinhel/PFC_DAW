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
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1> BORRAR UN PRODUCTO </h1>
                    <p class="negrita"> Introduzca el id del producto a borrar (puede consultar el listado de más abajo) </p>
                    <label>ID producto</label>
                    <select name = 'id' id='id'>
                        <?php
                        include_once '../../../PHP/productoBD.php';
                        $todos = productoBD::listarTodos();
                        echo "<option> Seleccionar..</option>";
                        foreach ($todos as $id) {
                            echo "<option value = " . $id->getIdProducto() . ">" . $id->getIdProducto() . "</option>";
                        }
                        ?>
                    </select>
                    <input type='submit' name='enviar' value='Borrar'/>  
                </form>

                <?php
                include_once '../../../PHP/BD/productoBD.php';
                if (isset($_POST['enviar'])) {
                    $todos1 = productoBD::listarTodos();
                    productoBD::borrarProducto($_POST['id']);
                    echo "El registro se ha borrado";
                }
                echo "<h1>LISTADO DE PRODUCTOS</h1 >";
                echo "<table border=1px>";
                echo "<tr class='marcar'><th>idProducto</th><th>nombreProducto</th><th>Descripción</th> <th>Marca</th>"
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
                <br/>
                <a href="listar.php">Volver al listado de productos</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
                <br/><br/>
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
