<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/pruebaClienteBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>   
        <h2> Modificar los datos de las pruebas programadas </h2>
        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = pruebaClienteBD::obtenerDatosPruebaCliente($_GET['id'], $_GET['ida']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DE LAS PRUEBAS A MODIFICAR SON: <br />";
            echo "<label>CLIENTE</label> <br/>";
            echo "<input type = 'text' name = 'cliente_idCliente'  value = " . $todos->getCliente_idCliente() . "><br />";
            echo "<label>PRUEBA </label> <br/>";
            echo "<input type = 'text' name = 'prueba_idPrueba'  value = " . $todos->getPrueba_idPrueba() . "> <br />";
            echo "<label>FECHA </label> <br/>";
            echo "<input type = 'text' name = 'fechaPrueba' value = " . $todos->getFechaPrueba() . "> <br />";
            echo "<label>DIAGNOSTICO</label> <br/>";
            echo "<input type = 'text' name = 'diagnostico'  value = " . $todos->getDiagnostico() . "> <br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Volver a la lista de pruebas - clientes &emsp;&emsp;</a>";
            echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['cliente_idCliente'] = $_POST['cliente_idCliente'];
            $row['prueba_idPrueba'] = $_POST['prueba_idPrueba'];
            $row['fechaPrueba'] = $_POST['fechaPrueba'];
            $row['diagnostico'] = $_POST['diagnostico'];
            pruebaClienteBD::actualizarPrueba($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>