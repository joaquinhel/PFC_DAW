<?php

session_start();
// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='loginIntranet.php'>identificarse</a><br />");
}
?>
