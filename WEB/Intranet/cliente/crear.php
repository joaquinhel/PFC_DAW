<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
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

            <?php
            include_once '../../../PHP/BD/clienteBD.php';
            if (isset($_POST['insertar'])) {
                $row[0] = $_POST['nombre'];
                $row[1] = $_POST['apellidos'];
                $row[2] = $_POST['nif'];
                $row[3] = $_POST['direccion'];
                $row[4] = $_POST['telefono'];
                $row[5] = $_POST['email'];
                clienteBD::insertarCliente($row);
            }
            ?>
            <div id='centro'>
                <h2>INTRODUCIR UN NUEVO CLIENTE</h2>

                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
                    <p>Introduzca los datos del cliente </p>
                    <label>Nombre: </label><input type="text" name="nombre" maxlength='40'/><br/>
                    <label>Apellidos: </label><input type="text" name="apellidos" maxlength='45'/><br/>
                    <label>NIF: </label> <input type="text" name="nif" maxlength='9'/><br/>
                    <label>Dirección: </label><input type="text" name="direccion" maxlength='45'/><br/>
                    <label>Teléfono: </label> <input type="text" name="telefono" maxlength='12'/><br/>
                    <label>Email: </label> <input type="text" name="email" maxlength='60'/><br/>
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

