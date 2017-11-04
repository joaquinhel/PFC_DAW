<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pruebaBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   
        <h2> Modificar los datos guardados de una prueba </h2>
        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = pruebaBD::obtenerDatosPrueba($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "<p>LOS DATOS ACTUALES DE LAS PRUEBAS A MODIFICAR SON: <p />";
            echo "<label>ID </label> <br/>";
            echo "<input type = 'text' name = 'idPrueba' value = " . $todos->getIdPrueba() . "> <br />";
            echo "<label>NOMBRE </label> <br/>";
            echo "<input type = 'text' name = 'nombrePrueba' value = " . $todos->getNombrePrueba() . "><br />";
            echo "<label>INSTRUMENTAL </label> <br/>";
            echo "<input type = 'text' name = 'aparatosNecesarios' value = " . $todos->getAparatosNecesarios() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
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
    </body>
</html>