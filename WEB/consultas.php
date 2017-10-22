<!DOCTYPE html>  
<html lang="es">
    <head>
        <title>Formulario de contacto HTML5/CSS3/PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../CSS/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <?php
        include 'menu.php';
        ?>

        <div id="contenedor">
            <?php
            include 'cabecera.php';
            ?>
            <div> 
                <h1>Formulario de contacto </h1>
                <hr/>
                <form action="enviar_email.php" method="post"> 
                    <label for="nombre">Nombre</label> <input type="text" size=36 id="nombre" />
                    <label for="apellido">Apellido</label> <input type="text" size=36 id="apellido"/>
                    <label for="email">E-mail</label> <input type="email" size=36 id="email"/>
                    <label for="telefono">Teléfono</label> <input type="tel" size=36 id="telefono"/>
                    <label for="mensaje">Mensaje</label> <textarea rows=5 cols=30 id="mensaje"></textarea>
                    <br/>
                    <input type="reset" value="Borrar"/> <input type="submit" value="Enviar"/>
                </form> 
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
