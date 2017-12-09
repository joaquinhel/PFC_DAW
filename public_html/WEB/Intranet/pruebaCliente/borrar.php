<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>BORRAR PRUEBA-CLIENTE</title>
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
            include_once '../../../PHP/BD/pruebaClienteBD.php';
            $todos = pruebaClienteBD::listarTodos();
            ?>
            <div id='centro'>

                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1> BORRAR UN PRUEBA PROGRAMADA </h1>
                    <p class="negrita"> Introduzca el id de la prueba ya programada
                        a borrar (puede consultar el listado de más abajo) </p>

                    <label>ID cliente</label>
                    <select name = 'ida' id='ida'>
                        <?php
                        echo "<option> Seleccionar..</option>";
                        foreach ($todos as $ida) {
                            echo "<option value = " . $ida->getCliente_idCliente() . ">" . $ida->getCliente_idCliente() . "</option>";
                        }
                        ?>
                    </select><br/>
                    <label>ID prueba</label>
                    <select name = 'id' id='id'>
                        <?php
                        echo "<option> Seleccionar..</option>";
                        foreach ($todos as $id) {
                            echo "<option value = " . $id->getPrueba_idPrueba() . ">" . $id->getPrueba_idPrueba() . "</option>";
                        }
                        ?>
                    </select>  <br/>

                    <input type='submit' name='enviar' value='Borrar'/>  
                </form>
                <?php
                include_once '../../../PHP/BD/pruebaClienteBD.php';
                if (isset($_POST['enviar'])) {
                    pruebaClienteBD::borrarPruebaCliente($_POST['id'], $_POST['ida']);
                    echo "<p>El registro se ha borrado</p>";
                    //echo "<a href=" . $_SERVER['PHP_SELF'] . "> Ver lista actualizada</a>";
                }
                echo "<h1>LISTADO DE PRUEBAS A CLIENTES PROGRAMADAS</h1>";
                echo "<table>";
                echo "<tr><th>ID CLIENTE</th><th>ID PRUEBA</th><th>FECHA</th><th>DIAGNOSTICO</th><th>ACCIONES</th>"
                . "</tr>";
                $todos1 = pruebaClienteBD::listarTodos();
                foreach ($todos1 as $aux) {
                    echo "<tr>"
                    . "<td>" . $aux->getCliente_idCliente() . "</td>"
                    . "<td>" . $aux->getPrueba_idPrueba() . "</td>"
                    . "<td>" . $aux->getFechaPrueba() . "</td> "
                    . "<td>" . $aux->getDiagnostico() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>
                <br/> 
                <a href = "listar.php">Volver al listado de Pruebas - Clientes</a>&emsp;
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
