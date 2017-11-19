<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pruebaClienteBD.php';
include_once "../../crearSesion.php";
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
            <div id='centro'>
                <h2> Modificar los datos de las pruebas programadas </h2>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = pruebaClienteBD::obtenerDatosPruebaCliente($_GET['id'], $_GET['ida']);
                    echo "<form action ='actualizar.php' method = 'POST'  onsubmit='return controlarEntradaPruebaCliente()'>";
                    echo "LOS DATOS ACTUALES DE LAS PRUEBAS A MODIFICAR SON: <br />";
                    echo "<label>CLIENTE</label> <br/>";
                    echo "<input type = 'text' name = 'cliente_idCliente'  maxlength='4' value = " . $todos->getCliente_idCliente() . "><br />";
                    echo "<label>PRUEBA </label> <br/>";
                    echo "<input type = 'text' name = 'prueba_idPrueba'  maxlength='4' value = " . $todos->getPrueba_idPrueba() . "> <br />";
                    echo "<label>FECHA </label> <br/>";
                    echo "<input type = 'date' name = 'fechaPrueba' value = " . $todos->getFechaPrueba() . "> <br />";
                    echo "<label>DIAGNOSTICO</label> <br/>";
                    echo "<input type = 'text' name = 'diagnostico' maxlength='45' value = " . $todos->getDiagnostico() . "> <br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de pruebas - clientes</a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } elseif (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['cliente_idCliente'] = $_POST['cliente_idCliente'];
                    $row['prueba_idPrueba'] = $_POST['prueba_idPrueba'];
                    $row['fechaPrueba'] = $_POST['fechaPrueba'];
                    $row['diagnostico'] = $_POST['diagnostico'];
                    pruebaClienteBD::actualizarPrueba($row);
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    unset($_POST['actualizar']);
                }
                ?>
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