<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR PROVEEDOR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <body>   
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            include_once '../../../PHP/BD/proveedorBD.php';
            require_once '../../../PHP/BD/Validaciones.php';

            if (isset($_POST['insertar'])) {
                $row['direccion'] = $_POST['direccion'];
                $row['nombreEmpresa'] = $_POST['nombreEmpresa'];
                $row['personaContacto'] = $_POST['personaContacto'];
                $row['cif'] = $_POST['cif'];
                $row['email'] = $_POST['email'];
                $row['telefono'] = $_POST['telefono'];

                global $js; //Variable para controlar si entra o no al js
                $js = 0;
                echo "<noscript>"; //Cuando está desactivado javascript
                $js = 1;
                require_once '../../../PHP/BD/Validaciones.php';
                $validar = Validaciones::controlarEntradaProveedor($row);
                if ($validar) {
                    proveedorBD::insertarProveedor($row);
                }
                echo "</noscript>";
                if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                    proveedorBD::insertarProveedor($row);
                }
            }
            ?>

            <h2>INTRODUCIR UN NUEVO PROVEEDOR</h2>
            <div id="error">
            </div>
            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" 
                  onsubmit="return controlarEntradaProveedor()">
                <p>Introduzca los datos del proveedor: </p>
                <label for="nombre">* Nombre Empresa: </label>
                <input type="text" name="nombreEmpresa" id="nombre" maxlength='45' required/><br/>
                <label for="direccion">Dirección: </label>
                <input type="text" name="direccion" id="direccion" maxlength='45' /><br/>
                <label for="contacto">Contacto: </label>
                <input type="text" name="personaContacto" id="contacto" maxlength='45'/><br/>
                <label for="cif">* CIF: </label>
                <input type="text" name="cif" id="cif" maxlength='45' required=""/><br/>
                <label for="email">* Email: </label>
                <input type="text" name="email" id="email" maxlength='45' required/><br/>
                <label for="telefono">* Teléfono: </label>
                <input type="text" name="telefono" id="telefono" maxlength='9' required/><br/>

                <input type="submit" name="insertar" value="Introducir Nuevo"/><br/>
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

