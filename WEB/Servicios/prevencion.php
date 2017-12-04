<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CENTRO OPTICO SÁNCHEZ SERVICIOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../CSS/conozcanos.css" rel="stylesheet" type="text/css"/>
        <link href="../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../../CSS/boton.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include_once 'ComunesServicio/menu.php';
        ?>

        <div id="contenedor">
            <?php
            include_once 'ComunesServicio/cabecera.php';
            ?>
            <h3>DISPONEMOS DE LA ÚLTIMA TECNOLOGÍA EN APARATOS DIAGNÓSTICOS</h3>
            <div class="two-columns">
                <p>El Examen Optométrico se complementa con otra serie de pruebas de gran importancia
                    que nos aportan información relevante para la prevención de ciertas patologías 
                    (distrofia de la córnea, glaucoma, degeneración macular asociada a la edad, etc.).
                    Es el caso del Examen Preventivo, cuya importancia radica en poder detectar una 
                    enfermedad en su fase temprana para tener la posibilidad de recibir un mejor tratamiento
                    y evitar así consecuencias más graves.

                    En Óptica Milán creemos firmemente en que la prevención es fundamental para una 
                    correcta salud visual a largo plazo, estando especializados en el Examen Preventivo.
                    Conocemos las últimas técnicas y protocolos más avanzados gracias a la formación continua, 
                    además de disponer de la última tecnología para el diagnóstico, seguimiento, prevención y 
                    tratamiento de los diferentes problemas visuales.
                    <img class='foto_prensentacion' src="../../imagenes/aplicacion/servicios/diagnostico.jpg" alt="foto_presentacion"/>

                </p>

                <label>PRUEBAS QUE REALIZAMOS EN ESTE TIPO DE EXAMEN:</label>
                <ul>
                    <li>Tonometría: con esta prueba medimos la presión intraocular, muy importante en la prevención 
                        del glaucoma, una de las principales patologías que causan ceguera en el mundo.</li>
                    <li>Biomicroscopía o lámpara de hendidura: esta prueba consiste en un examen del polo anterior 
                        y posterior del ojo, con el que podemos observar patologías como cataratas, conjuntivitis,
                        queratitis, blefaritis, pterigium o 'palmera', glaucoma, etc., así como evaluar los medios 
                        transparentes del ojo.</li>
                    <li>Rejilla de Amsler: este test sirve para evaluar de forma rápida la visión central de la
                        retina (visión de la mácula), permitiéndonos fácilmente ver dónde, cómo y cuánto se altera
                        la imagen y detectar patologías que afectan a la retina como es la degeneración macular.</li>
                    <li>Prueba de Schirmer: con este test, también conocido como 'prueba de ojo seco', valoramos 
                        la cantidad de lágrima, permitiéndonos diagnosticar el síndrome de ojo seco y su severidad
                        llegado el caso.</li>
                </ul>
            </div>
            <?php
            include 'ComunesServicio/pie.php';
            ?>
        </div>
        <?php
        include '../footer.php';
        ?>
    </body>
</html>