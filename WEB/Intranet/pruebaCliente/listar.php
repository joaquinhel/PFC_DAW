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
                <div>
                    <h1>LISTADO DE PRUEBAS A CLIENTES PROGRAMADAS</h1>
                    <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
                    <?php
                    include_once '../../../PHP/BD/pruebaClienteBD.php';
                    $todos = pruebaClienteBD::listarTodos();
                    echo "<table border=1px>";
                    echo "<tr><th>ID Prueba</th><th>ID CLIENTE</th><th>FECHA</th><th>DIAGNOSTICO</th><th>ACCIONES</th>"
                    . "</tr>";

                    foreach ($todos as $aux) {
                        echo "<tr>"
                        . "<td>" . $aux->getPrueba_idPrueba() . "</td>"
                        . "<td>" . $aux->getCliente_idCliente() . "</td>"
                        . "<td>" . $aux->getFechaPrueba() . "</td> "
                        . "<td>" . $aux->getDiagnostico() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getPrueba_idPrueba() . "&ida=" . $aux->getCliente_idCliente() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Borrar</a></tr>";
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