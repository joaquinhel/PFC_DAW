<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LISTAR PRUEBA-CLIENTE</title>
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
                <h1>LISTADO DE PRUEBAS PROGRAMADAS A CLIENTES</h1> <br/>
                <div>
                    <input type='submit' class='navegacion' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
                    <?php
                    include_once '../../../PHP/BD/pruebaClienteBD.php';
                    $todos = pruebaClienteBD::listarTodos();
                    echo "<table>";
                    echo "<tr><th>PRUEBA</th><th>CLIENTE</th><th>FECHA</th><th>DIAGNOSTICO</th><th>ACCIONES</th>"
                    . "</tr>";

                    foreach ($todos as $aux) {
                        echo "<tr class='marcar'>"
                        . "<td>" . $aux->getNombreCliente() . "</td>"
                        . "<td>" . $aux->getNombrePrueba() . "</td>"
                        . "<td>" . $aux->getFechaPrueba() . "</td> "
                        . "<td>" . $aux->getDiagnostico() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";
                    ?>
                    <br>
                        <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la INTRANET</a><br/>
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