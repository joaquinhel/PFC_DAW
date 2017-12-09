<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            include_once '../../../PHP/BD/categoriaBD.php';

            global $js; //Variable para controlar si entra o no al js
            $js = 0;
            echo "<noscript>"; //Cuando está desactivado javascript
            $js = 1;
            require_once '../../../PHP/BD/Validaciones.php';
            $validar = Validaciones::controlarEntradaCategoria($nombre);
            if (isset($_POST['insertar'])) {
                $nombre = $_POST['nombre'];
                if ($validar) {
                    categoriaBD::insertarCategoria($nombre);
                }
            }
            echo "</noscript>";
            if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                if (isset($_POST['insertar'])) {
                    $nombre = $_POST['nombre'];
                    if ($validar) {
                        categoriaBD::insertarCategoria($nombre);
                    }
                }
            }
            ?>
            <div id='centro'>
                <h1>CREAR UNA NUEVA CATEGORIA</h1>
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
