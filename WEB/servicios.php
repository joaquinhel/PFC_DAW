<!DOCTYPE html>

<html>
    <head>
        <link href="../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../css/servicios.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../imagenes/iconos/centroOptico.png" />
        <title>CENTRO ÓPTICO SANCHEZ</title>
        <meta charset="UTF-8">
    </head>
    <body id="body">
        <?php
        include 'menu.php';
        ?>

        <div id="contenedor">

            <?php
            include 'cabecera.php';
            ?>
            <div class="fila">
                <a href='Servicios/asesoramiento.php'>
                    <div class="caja"> 
                        <p> ASESORAMIENTO PROFESIONAL <br/> <img class='servicio' src="../imagenes/aplicacion/servicios/asesoramiento.png" alt=""/><br/>
                            Asesoramiento profesional y estético con una amplia gama de soluciones.</p>
                    </div> 
                </a>

                <a href='Servicios/vision.php'>
                    <div class="caja"> 
                        <p> BAJA VISIÓN <br/>  <img class='servicio' src="../imagenes/aplicacion/servicios/bajaVision.png" alt=""/><br/>
                            Amplia variedad de productos, incluyendo las últimas novedades del mercado. </p>
                    </div>
                </a>

                <a href='Servicios/contactologia.php'>
                    <div class="caja"> 
                        <p> CONTACTOLOGÍA <br/> <img class='servicio' src="../imagenes/aplicacion/servicios/contactologia.png" alt=""/><br/>
                            Realizamos un estudio personalizado para la elección de su lente de contacto.</p>
                    </div>
                </a>
            </div>

            <div class="fila">
                <a href='Servicios/examen.php'>
                    <div class="caja">
                        <p> EXAMEN OPTOMÉTRICO <br/> <img class='servicio' src="../imagenes/aplicacion/servicios/optometria.png" alt=""/> <br/>
                            Incluye un conjunto de pruebas que evalúan cada habilidad visual por separado.</p>
                    </div>
                </a>

                <a href='Servicios/prevencion.php'>
                    <div class="caja"> 
                        <p> EXAMEN PREVENTIVO <br/> <img class='servicio' src="../imagenes/aplicacion/servicios/preventivo.png" alt=""/> <br/>
                            Conocemos las últimas técnicas y protocolos más avanzados.
                        </p>
                    </div>
                </a>

                <a href='Servicios/montaje.php'>
                    <div class="caja"> 
                        <p>TALLER DE MONTAJE <br/> <img class='servicio' src="../imagenes/aplicacion/servicios/taller.png" alt=""/> <br/>
                            Amplia variedad de productos, incluyendo las últimas novedades del mercado.</p>
                        </p>
                    </div>
                </a>

            </div>
            <?php
            include 'pie.php';
            ?>
        </div>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>