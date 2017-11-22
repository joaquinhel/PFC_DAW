<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/clienteBD.php';
include_once '../../crearSesion.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MODIFICAR CLIENTE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <!--<script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>-->
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
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = clienteBD::obtenerDatosCliente($_GET['id']);
                    $_SESSION['id'] = $_GET['id'];
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaCliente()'>";
                    echo "LOS DATOS QUE PUEDE MODIFICAR DEL CLIENTE CON ID " . $_GET['id'] . " SON:<br />";
                    echo "<input type = 'hidden' name = 'idCliente' value = " . $todos->getIdCliente() . "> <br />";
                    echo "<label>NOMBRE</label> <br/>";
                    echo "<input type = 'text' name = 'nombreCliente' id='nombre' maxlength='40' required value = " . $todos->getNombreCliente() . "> <br />";
                    echo "<label>APELLIDOS</label> <br/>";
                    echo "<input type = 'text' name = 'apellidos' maxlength='45' id='apellido' required value = " . $todos->getApellidos() . "> <br />";
                    echo "<label>NIF </label> <br/>";
                    echo "<input type = 'text' name = 'nif' maxlength='10' id='nif' required value = " . $todos->getNif() . "> <br />";
                    echo "<label>DIRECCIÓN</label> <br/>";
                    echo "<input type = 'text' name = 'direccion' id='direccion' required maxlength='40' value = " . $todos->getDireccion() . "> <br />";
                    echo "<label>TELÉFONO </label> <br/>";
                    echo "<input type = 'text' name = 'telefono' id='telefono' required maxlength='12' value = " . $todos->getTelefono() . "> <br />";
                    echo "<label>EMAIL </label> <br/>";
                    echo "<input type = 'text' name = 'email' id='email' required maxlength='60' value = " . $todos->getEmail() . "> <br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de cliente </a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idCliente'] = $_POST['idCliente'];
                    $row['nombreCliente'] = $_POST['nombreCliente'];
                    $row['nif'] = $_POST['nif'];
                    $row['apellidos'] = $_POST['apellidos'];
                    $row['direccion'] = $_POST['direccion'];
                    $row['telefono'] = $_POST['telefono'];
                    $row['email'] = $_POST['email'];

                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarEntradaCliente($row);
                    if ($validar) {
                        clienteBD::actualizarCliente($row);
                        echo "<p>Los datos han sido actualizados</p>";
                        echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    }
                    unset($_POST['actualizar']);
                    echo "<a href='actualizar.php?id=" . $_SESSION['id'] . "'>Pulse para volver</a>";
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
