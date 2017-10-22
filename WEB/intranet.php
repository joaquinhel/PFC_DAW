<!DOCTYPE html>

<html>
    <head>
        <link href="../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/servicios.css" rel="stylesheet" type="text/css"/>
        <title>Optica</title>
        <meta charset="UTF-8">
    </head>
    <body id="body">
        <?php
        include 'menu.php';
        ?>

        <div id="contenedor">

            <?php
            include 'cabecera.php';
            $error = "";
            ?>

            <div class='fila'>
                <form action='login.php' method='post'>
                    <fieldset >
                        <legend>Login</legend>
                        <div><span class='error'><?php echo $error; ?></span></div>
                        <div class='campo'>
                            <label for='usuario' >Usuario:</label><br/>
                            <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
                        </div>
                        <div class='campo'>
                            <label for='password' >Contraseña:</label><br/>
                            <input type='password' name='password' id='password' maxlength="50" /><br/>
                        </div>
                        <div class='campo'>
                            <input type='submit' name='enviar' value='Enviar' />
                        </div>
                    </fieldset>
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


