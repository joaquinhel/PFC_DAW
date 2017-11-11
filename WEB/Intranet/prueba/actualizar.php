<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pruebaBD.php';
include_once '../PHP/controlSesion.php';
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

            <h2> Modificar los datos guardados de una prueba </h2>
            <?php
            if (!isset($_POST['actualizar'])) {
                $todos = pruebaBD::obtenerDatosPrueba($_GET['id']);
                echo "<form action ='actualizar.php' method = 'POST'>";
                echo "<p>LOS DATOS ACTUALES DE LAS PRUEBAS A MODIFICAR SON: <p />";
                echo "<label>ID </label> <br/>";
                echo "<input type = 'text' name = 'idPrueba' disabled value = " . $todos->getIdPrueba() . "> <br />";
                echo "<label>NOMBRE </label> <br/>";
                echo "<input type = 'text' name = 'nombrePrueba' maxlength='45' value = " . $todos->getNombrePrueba() . "><br />";
                echo "<label>INSTRUMENTAL </label> <br/>";
                echo "<input type = 'text' name = 'aparatosNecesarios' maxlength='45' value = " . $todos->getAparatosNecesarios() . "><br />";
                echo "<br/>";
                echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                echo "<a href = 'listar.php'>Volver a la lista de pruebas</a>";
                echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                echo "</form>";
            } elseif (isset($_POST['actualizar'])) {
                $row = array();
                $row['idPrueba'] = $_POST['idPrueba'];
                $row['nombrePrueba'] = $_POST['nombrePrueba'];
                $row['aparatosNecesarios'] = $_POST['aparatosNecesarios'];
                pruebaBD::actualizarPrueba($row);
                echo "Los datos han sido actualizados";
                unset($_POST['actualizar']);
            }
            ?>
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>