<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/clienteBD.php';
include_once '../../crearSesion.php';
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
            <div id='centro'>
                <h2> Modificar los datos del cliente </h2>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = clienteBD::obtenerDatosCliente($_GET['id']);
                    echo "<form action ='actualizar.php' method = 'POST'>";
                    echo "LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <br />";
                    echo "<label>ID</label> <br/>";
                    echo "<input type = 'text' name = 'idCliente' value = " . $todos->getIdCliente() . "> <br />";
                    echo "<label>NOMBRE</label> <br/>";
                    echo "<input type = 'text' name = 'nombreCliente' maxlength='40' value = " . $todos->getNombreCliente() . "> <br />";
                    echo "<label>APELLIDOS</label> <br/>";
                    echo "<label>NIF </label> <br/>";
                    echo "<input type = 'text' name = 'nif' maxlength='10' value = " . $todos->getNif() . "> <br />";
                    echo "<input type = 'text' name = 'apellidos' maxlength='45' value = " . $todos->getApellidos() . "> <br />";
                    echo "<label>DIRECCIÓN</label> <br/>";
                    echo "<input type = 'text' name = 'direccion' maxlength='40' value = " . $todos->getDireccion() . "> <br />";
                    echo "<label>TELÉFONO </label> <br/>";
                    echo "<input type = 'text' name = 'telefono' maxlength='12' value = " . $todos->getTelefono() . "> <br />";
                    echo "<label>EMAIL </label> <br/>";
                    echo "<input type = 'text' name = 'email' maxlength='60' value = " . $todos->getEmail() . "> <br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de cliente </a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } elseif (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idCliente'] = $_POST['idCliente'];
                    $row['nombreCliente'] = $_POST['nombreCliente'];
                    $row['nif'] = $_POST['nif'];
                    $row['apellidos'] = $_POST['apellidos'];
                    $row['direccion'] = $_POST['direccion'];
                    $row['telefono'] = $_POST['telefono'];
                    $row['email'] = $_POST['email'];

                    clienteBD::actualizarCliente($row);
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    unset($_POST['actualizar']);
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
