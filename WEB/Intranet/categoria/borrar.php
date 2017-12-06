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
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1> BORRAR UNA CATEGORIA </h1>
                    <p class="negrita"> Seleccione el id de la categoria a borrar (puede consultar el listado de más abajo) </p>
                    <label for = 'idCategoria'>*ID_CATEGORIA: </label><br/><br/>
                    <select name = 'id' id='id'>
                        <?php
                        include_once '../../../PHP/BD/categoriaBD.php';
                        $todos = categoriaBD::listarTodos();
                        echo "<option> Seleccionar..</option>";
                        foreach ($todos as $id) {
                            echo "<option value = " . $id->getIdCategoria() . ">" . $id->getIdCategoria() . "</option>";
                        }
                        ?>
                    </select>
                    <input type='submit' name='enviar' value='Borrar'/> <br/>
                </form>

                <?php
                include_once '../../../PHP/BD/categoriaBD.php';
                if (isset($_POST['enviar'])) {
                    $borrado = categoriaBD::borrarCategoria($_POST['id']);
                    if ($borrado == true) {
                        echo "<h4>El registro se ha borrado</h4><br/>";
                    } else {
                        echo "<h4>El borrado no ha sido posible, categoria de producto ya utilizada</h4><br/>";
                    }
                }

                echo " <h1>LISTADO DE CATEGORIAS DE PRODUCTOS</h1><br/>";
                echo "<table>";
                echo "<tr><th>ID</th><th>Nombre</th></tr>";
                $todos1 = categoriaBD::listarTodos();
                foreach ($todos1 as $aux) {
                    echo "<tr class='marcar'><td>" . $aux->getIdCategoria() . "</td> <td>" . $aux->getNombreCategoria() . "</td></tr>";
                }
                echo "</table>";
                ?> <br/>
                <a href = "listar.php">Volver al listado de categorias</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice de la INTRANET</a>
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
