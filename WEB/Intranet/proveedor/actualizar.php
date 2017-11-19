<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/proveedorBD.php';
include_once "../../crearSesion.php";
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
                <h2> Modificar los datos guardados de un proveedor </h2>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = proveedorBD::obtenerDatosProveedor($_GET['id']);
                    echo "<form action ='actualizar.php' method = 'POST'  onsubmit='return controlarEntradaProveedor()'>";
                    echo "<p>LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <p />";
                    echo "<input type = 'hidden' name = 'idProveedor' maxlength='4' value = " . $todos->getIdProveedor() . "> <br />";
                    echo "<label>* NOMBRE </label> <br/>";
                    echo "<input type = 'text' name = 'nombreEmpresa' id='nombre' required maxlength='45' value = " . $todos->getNombreEmpresa() . "><br />";
                    echo "<label>DIRECCIÓN </label> <br/>";
                    echo "<input type = 'text' name = 'direccion' id='nombre' maxlength='45' value = " . $todos->getDireccion() . "><br />";
                    echo "<label>* CONTACTO </label> <br/>";
                    echo "<input type = 'text' name = 'personaContacto' id='contacto' required maxlength='45' value = " . $todos->getPersonaContacto() . "><br />";
                    echo "<label>* CIF </label> <br/>";
                    echo "<input type = 'text' name = 'cif' id='cif' required  maxlength='45' value = " . $todos->getCif() . "><br />";
                    echo "<label>* EMAIL </label> <br/>";
                    echo "<input type = 'text' name = 'email' id='email' required  maxlength='45' value = " . $todos->getEmail() . "><br />";
                    echo "<label>* TELÉFONO </label> <br/>";
                    echo "<input type = 'text' name = 'telefono' id='telefono' required  maxlength='9' value = " . $todos->getTelefono() . "><br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de proveedores </a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } elseif (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idProveedor'] = $_POST['idProveedor'];
                    $row['nombreEmpresa'] = $_POST['nombreEmpresa'];
                    $row['direccion'] = $_POST['direccion'];
                    $row['personaContacto'] = $_POST['personaContacto'];
                    $row['cif'] = $_POST['cif'];
                    $row['email'] = $_POST['email'];
                    $row['telefono'] = $_POST['telefono'];
                    proveedorBD::actualizarProveedor($row);
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
