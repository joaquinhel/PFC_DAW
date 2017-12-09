<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CENTRO OPTICO SÁNCHEZ SERVICIOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../css/conozcanos.css" rel="stylesheet" type="text/css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="body">
        <?php
        include_once 'menu.php';
        ?>
        <div id='contenedor'>
            <?php
            include_once 'cabecera.php';
            ?>
            <p id="cierre"> La sesión ha finaizado de forma correcta, gracias por utilizar nuestra aplicación. <br/>
                <a href=index.php>Pulse aquí para volver al inicio</a> </p>

            <?php
            include 'pie.php';
            ?>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
