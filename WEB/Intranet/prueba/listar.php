<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LISTAR PRUEBA</title>
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
                <h1>LISTADO DE PRUEBAS</h1>
                <input type='submit' class='navegacion' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
                <div>
                    <?php
                    include_once '../../../PHP/BD/pruebaBD.php';
                    $todos = pruebaBD::listarTodos();
                    echo "<table>";
                    echo "<tr><th>idPrueba</th><th>nombrePrueba</th><th>Instrumental</th> <th>Descripcion</th><th>Acciones</th>"
                    . "</tr>";

                    foreach ($todos as $aux) {
                        echo "<tr>"
                        . "<td>" . $aux->getIdPrueba() . "</td> "
                        . "<td>" . $aux->getNombrePrueba() . "</td>"
                        . "<td>" . $aux->getAparatosNecesarios() . "</td>"
                        . "<td>" . $aux->getDescripcion() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getIdPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPrueba() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";
                    ?>
                    <br>
                        <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la Intranet</a><br/>
                </div>
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