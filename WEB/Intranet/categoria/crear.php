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
            include_once '../../../PHP/BD/categoriaBD.php';
            if (isset($_POST['insertar'])) {
                categoriaBD::insertarCategoria($_POST['nombre']);
            }
            ?>
            <div id='centro'
                 <h2>CREAR UNA NUEVA CATEGORIA</h2>
                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
                    <p>Introduzca los datos de la categoria </p>
                    <label>Nombre: </label> <input type="text" name="nombre"  maxlength ="30" ><br/><br/>
                        <input type="submit" name="insertar" value="Grabar en Registro"/> <br /><br />
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
