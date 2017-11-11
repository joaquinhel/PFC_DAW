<!DOCTYPE html>
<?php
include_once '../../../PHP/controlSesion.php';
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
            <div>
                <h1>LISTADO DE CATEGORIAS DE PROVEEDORES</h1>
                <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
                <?php
                include_once '../../../PHP/BD/pruebaBD.php';
                $todos = pruebaBD::listarTodos();
                echo "<table border=1px>";
                echo "<tr><th>idPrueba</th><th>nombrePrueba</th><th>Instrumental</th><th>Acciones</th>"
                . "</tr>";

                foreach ($todos as $aux) {
                    echo "<tr>"
                    . "<td>" . $aux->getIdPrueba() . "</td> "
                    . "<td>" . $aux->getNombrePrueba() . "</td>"
                    . "<td>" . $aux->getAparatosNecesarios() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPrueba() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>
                <br>
                    <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
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