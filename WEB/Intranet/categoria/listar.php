<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns = "http://www.w3.org/1999/xhtml">

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
                <h1>LISTADO DE CATEGORIAS DE CATEGORIAS</h1>
                <input type = 'submit' value = 'Crear Nuevo Registro' id = 'crear' class='navegacion' name = 'crear' onclick = "location = './crear.php'"/>
                <?php
                include_once '../../../PHP/BD/categoriaBD.php';
                $todos = categoriaBD::listarTodos();
                echo "<table>";
                echo "<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>";

                foreach ($todos as $aux) {
                    echo "<tr><td>" . $aux->getIdCategoria() . "</td> <td>" . $aux->getNombreCategoria() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdCategoria() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdCategoria() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>
                <br>
                    <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la Intranet</a><br/>
            </div><br/><br/>

            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>