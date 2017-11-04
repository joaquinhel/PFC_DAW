<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/proveedorBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   
        <h2> Modificar los datos guardados de un producto </h2>
        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = proveedorBD::obtenerDatosProveedor($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "<p>LOS DATOS ACTUALES DEL PROVEEDOR A MODIFICAR SON: <p />";
            echo "<label>ID </label> <br/>";
            echo "<input type = 'text' name = 'idProveedor' value = " . $todos->getIdProveedor() . "> <br />";
            echo "<label>DIRECCIÓN </label> <br/>";
            echo "<input type = 'text' name = 'direccion' value = " . $todos->getDireccion() . "><br />";
            echo "<label>NOMBRE DE LA EMPRESA </label> <br/>";
            echo "<input type = 'text' name = 'nombreEmpresa' value = " . $todos->getNombreEmpresa() . "><br />";
            echo "<label>PERSONA DE CONTACTO </label> <br/>";
            echo "<input type = 'text' name = 'personaContacto' value = " . $todos->getPersonaContacto() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idProveedor'] = $_POST['idProveedor'];
            $row['direccion'] = $_POST['direccion'];
            $row['nombreEmpresa'] = $_POST['nombreEmpresa'];
            $row['personaContacto'] = $_POST['personaContacto'];
            proveedorBD::actualizarProveedor($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>
