<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>BORRAR CATEGORIA</title>
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
                    <h1> BORRAR UNA CATEGORIA </h1>
                    <p class="negrita"> Introduzca el id de la categoria a borrar (puede consultar el listado de más abajo) </p>
                    <label>ID categoria</label><input type='text' name='id'  maxlength="4"/><br/>
                    <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                </form>

                <?php
                include_once '../../../PHP/BD/categoriaBD.php';
                if (isset($_POST['enviar'])) {
                    $borrado = categoriaBD::borrarCategoria($_POST['id']);
                    if ($borrado == true) {
                        echo "<h4>El registro se ha borrado</h4>";
                    } else {
                        echo "<h4>El borrado no ha sido posible, categoria de producto ya utilizada</h4>";
                    }
                }
                echo " <h1>LISTADO DE CATEGORIAS DE PRODUCTOS</h1>";
                $todos = categoriaBD::listarTodos();
                echo "<table border=1px>";
                echo "<tr><th>ID</th><th>Nombre</th></tr>";
                foreach ($todos as $aux) {
                    echo "<tr><td>" . $aux->getIdCategoria() . "</td> <td>" . $aux->getNombreCategoria() . "</td></tr>";
                }
                echo "</table>";
                ?>
                <a href = "listar.php">Volver al listado de categorias</a>&emsp;
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
