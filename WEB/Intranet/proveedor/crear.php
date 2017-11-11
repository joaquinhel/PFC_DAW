<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once '../../../PHP/controlSesion.php';
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

            <?php
            include_once '../../../PHP/BD/proveedorBD.php';
            if (isset($_POST['insertar'])) {
                $row['direccion'] = $_POST['direccion'];
                $row['nombreEmpresa'] = $_POST['nombreEmpresa'];
                $row['personaContacto'] = $_POST['personaContacto'];
                proveedorBD::insertarProveedor($row);
            }
            ?>
            <h2>INTRODUCIR UN NUEVO PROVEEDOR</h2>

            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
                <p>Introduzca los datos del proveedor: </p>
                <label>Dirección: </label><input type="text" name="direccion" maxlength='45' /><br/>
                <label>Nombre Empresa: </label><input type="text" name="nombreEmpresa" maxlength='45'/><br/>
                <label>Persona de Contacto: </label><input type="text" name="personaContacto" maxlength='45'/><br/>
                <input type="submit" name="insertar" value="Introducir Nuevo"/>
                <a href="listar.php">Volver al listado de proveedores</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
            </form> 
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>

