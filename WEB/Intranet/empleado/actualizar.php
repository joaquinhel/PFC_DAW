<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/empleadoBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>   
        <h2> Modificar los datos guardados de un empleado </h2>
        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = empleadoBD::obtenerDatosEmpleado($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "<p>LOS DATOS ACTUALES DEL EMPLEADO A MODIFICAR SON: <p />";
            echo "<label>ID </label> <br/>";
            echo "<input type = 'text' name = 'idEmpleado' value = " . $todos->getIdEmpleado() . "> <br />";
            echo "<label>NOMBRE </label> <br/>";
            echo "<input type = 'text' name = 'nombreEmpleado' value = " . $todos->getNombreEmpleado() . "><br />";
            echo "<label>APELLIDS</label> <br/>";
            echo "<input type = 'text' name = 'apellidos' value = " . $todos->getApellidos() . "><br />";
            echo "<label>DIRECCIÓN </label> <br/>";
            echo "<input type = 'text' name = 'direccion' value = " . $todos->getDireccion() . "><br />";
            echo "<label>TELÉFONO </label> <br/>";
            echo "<input type = 'text' name = 'telefono' value = " . $todos->getTelefono() . "><br />";
            echo "<label>EMAIL </label> <br/>";
            echo "<input type = 'text' name = 'email' value = " . $todos->getEmail() . "><br />";
            echo "<label>FECHA DE CONTRATACIÓN </label> <br/>";
            echo "<input type = 'text' name = 'fechaContratacion' value = " . $todos->getFechaContratacion() . "><br />";
            echo "<label>SUELDO </label> <br/>";
            echo "<input type = 'text' name = 'sueldo' value = " . $todos->getSueldo() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Volver a la lista de empleados &emsp;&emsp;</a>";
            echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
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
