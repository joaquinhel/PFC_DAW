
<?php

if ($_GET['accion'] === 'cerrar' && isset($_SESSION['usuario'])) { // si se cumple la condición
    session_destroy();
    echo '<h3> La sesión ha finaizado de forma correcta, gracias por utilizar nuestra aplicación</h3>';
} else {
     echo '<h3> La sesión ha finaizado de forma correcta, gracias por utilizar nuestra aplicación</h3>';
}

class ControlSesion {

    public static function cargarSesion() {
        session_start();
        if (!isset($_SESSION['usuario'])) {
            echo "<h3> Para acceder a esta pagina debe estar registrado </h3>";
            die("Error - debe <a href='../WEB/loginIntranet.php'> Identificarme</a>.<br />");
        }
    }

}
