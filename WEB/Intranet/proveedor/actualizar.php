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

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = proveedorBD::obtenerDatosProveedor($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL PROVEEDOR A MODIFICAR SON: <br />";
            echo "ID <input type = 'text' name = 'idProveedor' value = " . $todos->getIdProveedor() . "> <br />";
            echo "DIRECCIÓN <input type = 'text' name = 'direccion' value = " . $todos->getDireccion() . "><br />";
            echo "NOMBRE DE LA EMPRESA <input type = 'text' name = 'nombreEmpresa' value = " . $todos->getNombreEmpresa() . "><br />";
            echo "PERSONA DE CONTACTO <input type = 'text' name = 'personaContacto' value = " . $todos->getPersonaContacto() . "><br />";
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
