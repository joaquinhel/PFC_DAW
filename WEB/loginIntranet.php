<!DOCTYPE html>

<html>
    <head>
        <link href="../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../css/servicios.css" rel="stylesheet" type="text/css"/>

        <title>Optica</title>
        <meta charset="UTF-8">
    </head>
    <body id="body">
        <?php
        require_once('../PHP/BD/usuarioBD.php');
        $error = "";
        $_GET['accion']="";
        $accion="";
        if (isset($_POST['enviar'])) {
            if (empty($_POST['usuario']) || empty($_POST['password'])) {
                $error = "Debes introducir un nombre de usuario y una contraseña";
            } else {
                $usuario = $_POST['usuario'];
                $pass = $_POST['password'];
                $entrar = usuarioBD::hacerLogin($usuario, $pass);
                if ($entrar) {
                    session_start();
                    $_SESSION['usuario'] = $_POST['usuario'];
                    header("Location:menuIntranet.php");
                } else {
                    $error = "Usuario o contraseña no válidos!";
                }
            }
        }
        ?>

        <?php
        include 'menu.php';
        ?>
        <div id="contenedor">

            <?php
            include 'cabecera.php';
            $error = "";
            ?>
            <div class='fila'>
                <form action='loginIntranet.php' method='post'>
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


