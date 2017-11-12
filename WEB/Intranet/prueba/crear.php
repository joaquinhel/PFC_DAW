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
            include_once '../../../PHP/BD/pruebaBD.php';
            if (isset($_POST['insertar'])) {
                $row['nombrePrueba'] = $_POST['nombrePrueba'];
                $row['aparatosNecesarios'] = $_POST['aparatosNecesarios'];
                $row['descripcion'] = $_POST['descripcion'];
                pruebaBD::insertarPrueba($row);
            }
            ?>
            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
                <p>Introduzca los datos de la prueba: </p> <br/>
                <label>Nombre Prueba:</label> <input type="text" name="nombrePrueba" maxlength='45'/><br/>
                <label>Instrumental:</label> <input type="text" name="aparatosNecesarios" maxlength='45'/><br/>
                <label>Descripcion:</label> <input type="text" name="descripcion" maxlength='60'/><br/>
                <input type="submit" name="insertar" value="Introducir Nuevo"/><br/>
                <a href="listar.php">Volver al listado de pruebas</a>&emsp;
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

