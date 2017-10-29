<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/empleadoBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = empleadoBD::obtenerDatosEmpleado($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL EMPLEADO A MODIFICAR SON: <br />";
            echo "ID <input type = 'text' name = 'idEmpleado' value = " . $todos->getIdEmpleado() . "> <br />";
            echo "NOMBRE <input type = 'text' name = 'nombreEmpleado' value = " . $todos->getNombreEmpleado() . "><br />";
            echo "APELLIDS <input type = 'text' name = 'apellidos' value = " . $todos->getApellidos() . "><br />";
            echo "DIRECCIÓN <input type = 'text' name = 'direccion' value = " . $todos->getDireccion() . "><br />";
            echo "TELÉFONO <input type = 'text' name = 'telefono' value = " . $todos->getTelefono() . "><br />";
            echo "EMAIL <input type = 'text' name = 'email' value = " . $todos->getEmail() . "><br />";
            echo "FECHA DE CONTRATACIÓN <input type = 'text' name = 'fechaContratacion' value = " . $todos->getFechaContratacion() . "><br />";
            echo "SUELDO <input type = 'text' name = 'sueldo' value = " . $todos->getSueldo() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idEmpleado'] = $_POST['idEmpleado'];
            $row['nombreEmpleado'] = $_POST['nombreEmpleado'];
            $row['apellidos'] = $_POST['apellidos'];
            $row['direccion'] = $_POST['direccion'];
            $row['telefono'] = $_POST['telefono'];
            $row['email'] = $_POST['email'];
            $row['fechaContratacion'] = $_POST['fechaContratacion'];
            $row['sueldo'] = $_POST['sueldo'];
            empleadoBD::actualizarEmpleado($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>
