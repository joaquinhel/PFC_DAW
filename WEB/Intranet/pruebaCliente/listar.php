<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Listado de pruebas programadas</title>
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
                <div id='centro'>
                    <h1>LISTADO DE PRUEBAS PROGRAMADAS A CLIENTES</h1>
                    <div>
                        <input type='submit' class='navegacion' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
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
                            . "<td> <a href='actualizar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Borrar</a></tr>";
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