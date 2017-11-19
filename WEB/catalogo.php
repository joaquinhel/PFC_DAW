<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/agregarNuevaFila.js"></script>
        <script type="text/javascript" src="../js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="../js/cambiarOpacidadImagenes.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/estilo_1.css"/>
        <link href="../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <!-- Lightbox -->
        <script type="text/javascript" src="../lightbox/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="../lightbox/js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="../lightbox/js/lightbox.js"></script>
        <link rel="stylesheet" href="../lightbox/css/lightbox.css" type="text/css" />
        <title>Galería imagenes</title>
    </head>
    <!-- Muestra el estilo modificado para el input file y cambia la opacidad de las imagenes de la galeria     -->
    <body onLoad="
            mostrarInputFileModificado('imagen1');
            cambiarOpacidadImagenes(0.5);
          ">
              <?php
              include 'menu.php';
              ?>

        <div id="contenedor">
            <?php
            include 'cabecera.php';
            ?>

            <div class="galeria" style="clear: both">
                <h1>NUESTROS ARTÍCULOS</h1>
                <?php
                require 'config.php';
                //require 'GestorArchivos.php';

                $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);

                $consulta = "SELECT archivo, directorio FROM galeriaimagenes ORDER BY id";
                $resultado = $conexion->query($consulta);

                // Muestra las imagenes de la galeria.
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
        <!--
                    <div id="subirImagenes">
        <!-- Para poder subir archivos con PHP hay que poner enctype="multipart/form-data"
para que no se encripte ningun caracter y el archivo no se modifique/estropee
        <form action="#" method="POST" enctype="multipart/form-data">
            <table id="formularioSubida" border="0">
                <thead>
                <th>Elige los archivos que quieras subir</th>
                </thead>
                <tr>
                    <td>
                        <div class="inputImagenModificado">
                            <input class="inputImagenOculto" name="imagen1" type="file">
                            <div class="inputParaMostrar">
                                <input style="background: white">
                                <img src="../imagenes/prueba/button_select2.gif">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <input type="button" id="botonAnnadir" 
                               onClick="agregarFila('formularioSubida', 'botonAnnadir')" 
                               value="Añadir archivo" style="width:138px;">        
                        <input type="submit" name="botonSubir" value="Subir"> 
                    </td>
                </tr>
            </table>
        </form>
        -->
        <?php
        include 'pie.php';
        ?>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>