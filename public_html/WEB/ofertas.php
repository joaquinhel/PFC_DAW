<!DOCTYPE html>

<html>
    <head>
        <link href="../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../css/servicios.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../imagenes/iconos/centroOptico.png" />
        <title>CENTRO ÓPTICO SÁNCHEZ </title>
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
            <h1>LISTADO DE NUETRAS OFERTAS EN VIGOR</h1>
            <div class="filaOferta">
                <a>
                    <div class="cajaOferta"> 
                        <p> LENTES DE CONTACTO <br/>  <img class='oferta' src="../imagenes/aplicacion/ofertaLentillas.jpg" alt=""/><br/>
                            ¿Le molestan sus gafas para algunas de sus actividades diarias? Use lentes de contacto diarias y 
                            comodísimas por 1 € al día. ¡No deje de hacer lo que le gusta!
                        </p>
                    </div>
                </a>

                <a>
                    <div class="cajaOferta"> 
                        <p> NAVIDAD <br/> <img class='oferta' src="../imagenes/aplicacion/ofertaNavidad.jpg" alt=""/><br/>
                            ¡Aprovecha esta oportunidad! Haz un buen regalo a un precio inmejorable. 40% de descuento
                            en gafas de sol de Carolina Herrera, Tommy Hilfiger, Gucci y Versace hasta el 5 de
                            Enero de 2017.</p>
                    </div>
                </a>
            </div>
            <?php
            include 'pie.php';
            ?>
            <br/>
            <?php
            include 'footer.php';
            ?>
        </div>
    </body>
</html>