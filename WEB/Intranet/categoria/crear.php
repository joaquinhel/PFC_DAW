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
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
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
            include_once '../../../PHP/BD/categoriaBD.php';
            require_once '../../../PHP/BD/Validaciones.php';

            if (isset($_POST['insertar'])) {
                $nombre = $_POST['nombre'];
                $validar = Validaciones::controlarEntradaCategoria($nombre);
                if ($validar) {
                    categoriaBD::insertarCategoria($nombre);
                }
            }
            ?>
            <div id='centro'>
                <h2>CREAR UNA NUEVA CATEGORIA</h2>
                <div id="error">
                </div>
                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" 
                      onsubmit="return controlarEntradaCategoria()">
                    <p>Introduzca los datos de la categoria </p>
                    <label for="nombre"> * Nombre: </label> 
                    <input type="text" id="nombre" name="nombre" maxlength ="30" /><br/><br/>
                    <input type="submit" name="insertar" value="Introducir Nuevo"/> <br /><br />
                    <a href="listar.php">Volver al listado de categorias</a>&emsp;
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
