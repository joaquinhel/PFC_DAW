<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CENTRO OPTICO SÁNCHEZ SERVICIOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/conozcanos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="body">
        <?php
        include_once 'ComunesServicio/menu.php';
        ?>

        <div id="contenedor">
            <?php
            include_once 'ComunesServicio/cabecera.php';
            ?>
            <input type="button" value="Pulse para ver todos nuestros servicios" onClick="window.location.href = '../servicios.php'">
                <h3>LE ASESORAMOS SOBRE LA MEJOR ELECCIÓN EN RELACIÓN CALIDAD-PRECIO</h3>
                <div class="two-columns">
                    <p>
                        En Centro Óptico Sánchez, para ayudarle a escoger la mejor solución y/o producto, 
                        disponemos de una gran experiencia enfocada a orientar a nuestros clientes, 
                        para que puedan hacer su elección en función de sus necesidades y sus gustos.
                        <img class='foto_prensentacion' src="../../imagenes/aplicacion/servicios/asesora1.jpg" alt="foto_presentacion"/>
                        Realizamos un asesoramiento totalmente personalizado disponiendo de una amplia 
                        gama de soluciones, informando de los pros y contras de cada una de ellas, así
                        como de las diferencias entre unas y otras.

                        Igualmente, sus facciones y, sobre todo, su personalidad, son analizadas por 
                        <img class='foto_prensentacion' src="../../imagenes/aplicacion/servicios/asesora1.jpg" alt="foto_presentacion"/>
                        nuestra parte para elaborarle un diagnóstico de imagen a su medida, ofreciéndole 
                        soluciones sobre el tipo de producto que le favorece y que combina mejor con su estilo.
                        Le brindamos una amplia selección de productos de marcas exclusivas, destacando 
                        las nuevas tendencias dirigidas a personas con gran interés por la estética. Con 
                        la calidad de nuestros productos, todos de primeras calidades y garantías, 
                        conseguimos la máxima satisfacción de nuestros clientes.
                    </p>
                </div>
                <input type="button" value="Pulse para ver todos nuestros servicios" onClick="window.location.href = '../servicios.php'">

                    <?php
                    include 'ComunesServicio/pie.php';
                    ?>
                    </div>
                    <?php
                    include '../footer.php';
                    ?>
                    </body>
                    </html>
