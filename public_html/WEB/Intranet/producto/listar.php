<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LISTAR PRODUCTO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../css/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <h1>LISTADO DE PRODUCTOS</h1><br/>
                <input type='submit' class='navegacion' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
                <div>
                    <?php
                    include_once '../../../PHP/BD/productoBD.php';

                    $todos = productoBD::listarTodos();
                    echo "<table border=1px>";
                    echo "<tr><th>idProducto</th><th>nombreProducto</th><th>Descripción</th> <th>Marca</th>"
                    . "<th>Precio</th><th>Proveedor</th> <th>Categoria</th> <th>Acciones</th>"
                    . "</tr>";

                    foreach ($todos as $aux) {
                        echo "<tr class='marcar'>"
                        . "<td>" . $aux->getIdProducto() . "</td> "
                        . "<td>" . $aux->getNombreProducto() . "</td>"
                        . "<td>" . $aux->getDescripcion() . "</td>"
                        . "<td>" . $aux->getMarca() . "</td>"
                        . "<td>" . $aux->getPrecio() . "</td> "
                        . "<td>" . $aux->getNombreEmpresa() . "</td>"
                        . "<td>" . $aux->getNombreCategoria() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getIdProducto() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdProducto() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";
                    ?>
                    <br>
                        <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la INTRANET</a><br/>
                </div><br/><br/>
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