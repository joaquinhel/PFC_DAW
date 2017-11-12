<?php

session_start();
session_destroy();
echo '<h3> La sesión ha finaizado de forma correcta, gracias por utilizar nuestra aplicación</h3>';
echo '<h2>Pulse <a href=inicio.php>aquí</a> para volver al inicio</h2>';

