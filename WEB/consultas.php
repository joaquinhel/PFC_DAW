<!DOCTYPE html>  
<html lang="es">
    <head>
        <title>Formulario de contacto HTML5/CSS3/PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'menu.php';
        ?>

        <div id="contenedor">
            <?php
            include 'cabecera.php';
            ?>

            <?php
            if (isset($POST['enviar'])) {
                $mail = "Prueba de mensaje";
                //Titulo
                $titulo = $POST['mensaje'];
                //cabecera
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                //dirección del remitente 
                //$headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
                //Enviamos el mensaje a tu_dirección_email 
                $bool = mail("joaquin_1919@hotmail.com", $titulo, $mail, $headers);
                if ($bool) {
                    echo "Mensaje enviado";
                } else {
                    echo "Mensaje no enviado";
                }
            }
            ?>

            <div> 
                <h1>Formulario de contacto </h1>
                <hr/>
                <form action="consultas.php" method="post"> 
                    <label for="nombre">Nombre</label> 
                    <input type="text" size='36' name="nombre" id="nombre" />
                    <label for="apellido">Apellido</label> 
                    <input type="text" size=36 name="apellido" id="apellido"/>
                    <label for="email">E-mail</label> 
                    <input type="email" size=36 name="email" id="email"/>
                    <label for="telefono">Teléfono</label> 
                    <input type="tel" size=36 id="telefono" name="telefono"/>
                    <label for="mensaje">Mensaje</label> 
                    <textarea rows=5 cols=30 id="mensaje" name="mensaje"></textarea>
                    <br/>
                    <input type="reset" value="Borrar"/> <input type="submit" name ="enviar" value="Enviar"/>
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
