<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/clienteBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = clienteBD::obtenerDatosCliente($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <br />";
            echo "ID <input type = 'text' name = 'idCliente' value = " . $todos->getIdCliente() . " /> <br />";
            echo "NOMBRE <input type = 'text' name = 'nombreCliente' value = " . $todos->getNombreCliente() . " /> <br />";
            echo "APELLIDOS <input type = 'text' name = 'apellidos' value = " . $todos->getApellidos() . " /> <br />";
            echo "DIRECCIÓN <input type = 'text' name = 'direccion' value = " . $todos->getDireccion() . " /> <br />";
            echo "TELÉFONO <input type = 'text' name = 'telefono' value = " . $todos->getTelefono() . " /> <br />";
            echo "NIF <input type = 'text' name = 'nif' value = " . $todos->getNif() . " /> <br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idCliente'] = $_POST['idCliente'];
            $row['nombreCliente'] = $_POST['nombreCliente'];
            $row['apellidos'] = $_POST['apellidos'];
            $row['direccion'] = $_POST['direccion'];
            $row['telefono'] = $_POST['telefono'];
            $row['nif'] = $_POST['nif'];
            clienteBD::actualizarCliente($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>


    </body>
</html>
