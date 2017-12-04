<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CENTRO OPTICO SÁNCHEZ SERVICIOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../CSS/conozcanos.css" rel="stylesheet" type="text/css"/>
        <link href="../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include_once 'ComunesServicio/menu.php';
        ?>

        <div id="contenedor">
            <?php
            include_once 'ComunesServicio/cabecera.php';
            ?>
            <input type="button" value="Pulse para ver todos nuestros servicios" onClick="window.location.href = '../servicios.php'">

                <h3> MONTAMOS CUALQUIERA DE LOS TIPOS DE GAFAS DISPONIBLES EN EL MERCADO</h3>
                <div class="two-columns">
                    <p>
                        Disponemos de taller propio, lo que nos permite realizar casi la totalidad 
                        de arreglos y ajustes sobre la marcha. Asimismo, podemos montar cualquiera 
                        <img class='foto_prensentacion' src="../../imagenes/aplicacion/servicios/montaje.jpg" alt="foto_presentacion"/>
                        de los tipos de gafas disponibles en el mercado y no tener que enviar montajes
                        a otros talleres, evitando así el sobrecoste y la demora de tiempo que ello conlleva.
                        La mejor tecnología en manos de expertos dispuestos a ayudarle hace que el 
                        resultado de nuestros trabajos sea impecable y obtengan acabados perfectos. Si ya nos conoce, 
                        sabe lo que podemos hacer, y si no nos conoce, pónganos a prueba, seguro que le vamos a sorprender.
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