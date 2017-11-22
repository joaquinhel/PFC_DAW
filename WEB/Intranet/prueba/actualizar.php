<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pruebaBD.php';
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
         <!-- <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>-->
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
                <h2> Modificar los datos guardados de una prueba </h2>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = pruebaBD::obtenerDatosPrueba($_GET['id']);
                    $_SESSION['id'] = $_GET['id'];
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaEmpleado()'>";
                    echo "<p>LOS DATOS ACTUALES DE LAS PRUEBAS A MODIFICAR SON: <p />";
                    echo "<input type = 'hidden' name = 'idPrueba' value = " . $todos->getIdPrueba() . "> <br />";
                    echo "<label>* NOMBRE </label> <br/>";
                    echo "<input type = 'text' name = 'nombrePrueba' id='nombre' required maxlength='45' value = " . $todos->getNombrePrueba() . "><br />";
                    echo "<label>* INSTRUMENTAL </label> <br/>";
                    echo "<input type = 'text' name = 'aparatosNecesarios' id='instrumental' required maxlength='45' value = " . $todos->getAparatosNecesarios() . "><br />";
                    echo "<label>DESCRIPCIÓN </label> <br/>";
                    echo "<input type = 'text' name = 'descripcion' id='descripcion' required maxlength='45' value = " . $todos->getDescripcion() . "><br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de pruebas</a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idPrueba'] = $_POST['idPrueba'];
                    $row['nombrePrueba'] = $_POST['nombrePrueba'];
                    $row['aparatosNecesarios'] = $_POST['aparatosNecesarios'];
                    $row['descripcion'] = $_POST['descripcion'];

                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarEntradaPrueba($row);
                    if ($validar) {
                        pruebaBD::actualizarPrueba($row);
                        echo "<p>Los datos han sido actualizados</p>";
                        echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    }
                    unset($_POST['actualizar']);
                    echo "<a href='actualizar.php?id=" . $_SESSION['id'] . "'>Pulse para volver</a>";
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