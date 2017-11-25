<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR PRUEBA CLIENTE</title>
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

                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <p> INTRODUZCA EL IDENTIFICADOR DE LA PRUEBA Y EL CLIENTE A BORRAR </p>
                    <label>ID prueba</label><input type='text' name='id' maxlength='4'/><br/>
                    <label>ID cliente</label><input type='text' name='ida' maxlength='4'/><br/>
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
                $todos = pruebaClienteBD::listarTodos();
                echo "<table>";
                echo "<tr><th>ID Prueba</th><th>ID CLIENTE</th><th>FECHA</th><th>DIAGNOSTICO</th><th>ACCIONES</th>"
                . "</tr>";

                foreach ($todos as $aux) {
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
                <br/><br/> 
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
