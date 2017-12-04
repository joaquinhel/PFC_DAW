<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CLIENTES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
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
            include_once '../../../PHP/BD/clienteBD.php';
            require_once '../../../PHP/BD/Validaciones.php';
            if (isset($_POST['insertar'])) {
                $row['nombre'] = $_POST['nombre'];
                $row['apellidos'] = $_POST['apellidos'];
                $row['nif'] = $_POST['nif'];
                $row['direccion'] = $_POST['direccion'];
                $row['telefono'] = $_POST['telefono'];
                $row['email'] = $_POST['email'];

                clienteBD::insertarCliente($row);

                echo "<noscript>";
                $validar = Validaciones::controlarEntradaCategoria($row);
                if ($validar) {
                    clienteBD::insertarCliente($row);
                }
                echo "</noscript>";
            }
            ?>

            <div id='centro'>
                <h1>INTRODUCIR UN NUEVO CLIENTE</h1>
                <div id="error">
                </div>
                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post"
                      onsubmit="return controlarEntradaCliente()">
                    <p>Introduzca los datos del cliente </p>
                    <label for="nombre">*Nombre: </label>
                    <input type="text" name="nombre" id="nombre" maxlength='40' required/><br/>
                    <label for="apellido">*Apellidos: </label>
                    <input type="text" name="apellidos" id="apellido" maxlength='45' required/><br/>
                    <label for="nif">*NIF: </label> 
                    <input type="text" name="nif" id="nif" maxlength='9' rquired /><br/>
                    <label for="direccion">Dirección: </label>
                    <input type="text" name="direccion" id="direccion" maxlength='45'/><br/>
                    <label for="telefono">*Teléfono: </label> 
                    <input type="text" name="telefono" id="telefono" maxlength='9' required/><br/>
                    <label for="email">*Email: </label> 
                    <input type="email" name="email" id="email" maxlength='60'/><br/>

                    <input type="submit" name="insertar" value="Introducir Nuevo"/><br /><br />
                    <a href="listar.php">Volver al listado de clientes</a>&emsp;
                    <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
                </form> 
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

