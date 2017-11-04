<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/compraBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = compraBD::obtenerDatosCompra($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL EMPLEADO A MODIFICAR SON: <br />";
            echo "ID COMPRA <input type = 'text' name = 'idCompra' value = " . $todos->getIdcompra() . "> <br />";
            echo "FECHA EMISIÓN<input type = 'text' name = 'fechaEmision' value = " . $todos->getFechaEmision() . "><br />";
            echo "FECHA VENCIMIENTO <input type = 'text' name = 'fechaVencimiento' value = " . $todos->getFechaVencimiento() . "><br />";
            echo "PROVEEDOR:";
            /*
            echo "<select name = 'proveedor_idProveedor'>";
            $todos1 = proveedorBD::listarTodos();
            foreach ($todos1 as $id) {
                echo "<option value=" . $id->getIdProveedor() . ">" . $id->getNombreEmpresa() . "</option>";
            }
            echo "</select>";*/
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idCompra'] = $_POST['idCompra'];
            $row['fechaEmision'] = $_POST['fechaEmision'];
            $row['fechaVencimiento'] = $_POST['fechaVencimiento'];
            /*$row['proveedor_idProveedor'] = $_POST['proveedor_idProveedor'];*/
            compraBD::actualizarCompra($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>
