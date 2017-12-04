<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pruebaClienteBD.php';
include_once "../../crearSesion.php";
include_once '../../../PHP/BD/clienteBD.php';
include_once '../../../PHP/BD/pruebaBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MODIFICAR PRUEBA-CLIENTE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
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
                    $_SESSION['id'] = $_GET['id'];
                    $_SESSION['ida'] = $_GET['ida'];
                    echo "<form action ='actualizar.php' method = 'POST'  onsubmit='return controlarEntradaPruebaCliente()'>";
                    echo "LOS DATOS ACTUALES DE LAS PRUEBAS A MODIFICAR SON: <br />";
                    echo "<label for = 'cliente'>* CLIENTE: </label><br/>";
                    echo "<select name = 'cliente_idCliente' id = 'cliente' required>";
                    $todos1 = clienteBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value=" . $id->getIdCliente() . ">" . $id->getNif() . "</option>";
                    }
                    echo "</select>";
                    echo "<br/>";

                    echo "<label for = 'prueba'>* PRUEBA: </label><br/>";
                    echo "<select name = 'prueba_idPrueba' id = 'prueba' required>";

                    $todos2 = pruebaBD::listarTodos();
                    foreach ($todos2 as $id) {
                        echo "<option value=" . $id->getIdPrueba() . ">" . $id->getNombrePrueba() . "</option>";
                    }
                    echo "</select><br/>";

                    echo "<label for='fecha'>* FECHA</label> <br/>";
                    echo "<input type = 'date' name = 'fechaPrueba' id='fecha' required value = " . $todos->getFechaPrueba() . "> <br />";
                    echo "<label for='diagnostico'>* DIAGNOSTICO</label> <br/>";
                    echo "<input type = 'text' name = 'diagnostico' id='diagnostico' maxlength='55' "
                    . "value = " . $todos->getDiagnostico() . "> <br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de pruebas - clientes</a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['cliente_idCliente'] = $_POST['cliente_idCliente'];
                    $row['prueba_idPrueba'] = $_POST['prueba_idPrueba'];
                    $row['fechaPrueba'] = $_POST['fechaPrueba'];
                    $row['diagnostico'] = $_POST['diagnostico'];

                    global $js; //Variable para controlar si entra o no al js
                    $js = 0;
                    echo "<noscript>"; //Cuando está desactivado javascript
                    $js = 1;
                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarEntradaPruebaCliente($row);
                    if ($validar) {
                        pruebaClienteBD::actualizarPruebaCliente($row);
                    }
                    echo "</noscript>";
                    if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                        pruebaClienteBD::actualizarPruebaCliente($row);
                    }
                    unset($_POST['actualizar']);
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    echo "<a href='actualizar.php?id=" . $_SESSION['id'] . "&ida=" . $_SESSION['ida'] . "'>Pulse para volver</a>";
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