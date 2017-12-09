<!DOCTYPE html>
<html>
    <?php
    require_once '../PHP/BD/catalogoBD.php';
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/agregarNuevaFila.js"></script>
        <script type="text/javascript" src="../js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="../js/cambiarOpacidadImagenes.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/catalogo.css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
        <!-- Lightbox -->
        <script type="text/javascript" src="../lightbox/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="../lightbox/js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="../lightbox/js/lightbox.js"></script>
        <link rel="stylesheet" href="../lightbox/css/lightbox.css" type="text/css" />
        <link rel="icon" type="image/png" href="../imagenes/iconos/centroOptico.png" />

        <title>Galería imagenes</title>
    </head>
    <body>
        <?php
        include 'menu.php';
        ?>
        <div id="contenedor">
            <?php
            include 'cabecera.php';
            ?>
            <div class="galeria">
                <h1>NUESTROS ARTÍCULOS</h1>
                <?php
                $resultado = catalogoBD::catalogo();
                while ($filas = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    // Se comprueba que existan las imagenes
                    if (file_exists("../imagenes/" . $filas["directorio"] . "/" . $filas["archivo"])) {
                        echo'<a href="../imagenes/' . $filas['directorio'] . '/' . $filas['archivo'] .
                        '" rel="lightbox[galeria]" title="' . $filas['archivo'] . '">'
                        . '<img src="../imagenes/' . $filas['directorio'] . '/' . $filas['archivo'] . '"/></a>';
                    }
                }
                ?>
            </div>
        </div>

        <?php
        include 'pie.php';
        ?>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
