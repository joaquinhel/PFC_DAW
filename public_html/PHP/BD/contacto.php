<?php
if (isset($_POST['email'])) {
    $email_to = "joaquin_1919@hotmail.com";
    $email_subject = "Tu Asunto de correo";

    function died($error) {
        // si hay algún error, el formulario puede desplegar su mensaje de aviso
        echo "Lo sentimos, hay un error en sus datos y el formulario no puede ser enviado. ";
        echo "Detalle de los errores.<br /><br />";
        echo $error . "<br /><br />";
        echo "Porfavor corrije los errores e inténtelo de nuevo.<br /><br />";
        die();
    }

    // Se valida que los campos del formulairo estén llenos

    if (!isset($_POST['nombre']) ||
            !isset($_POST['apellidos']) ||
            !isset($_POST['email']) ||
            !isset($_POST['telefono']) ||
            !isset($_POST['mensaje'])) {

        died('Lo sentimos pero parece haber un problema con los datos enviados.');
    }
    //Valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    $nombre = $_POST['nombre']; // requerido
    $apellidos = $_POST['apellidos']; // requerido
    $email_from = $_POST['email']; // requerido
    $telefono = $_POST['telefono']; // no requerido 
    $mensaje = $_POST['mensaje']; // requerido
    $error_mensaje = "Error";

//Verificar que la dirección de correo sea válida 

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_mensaje .= 'La dirección de correo proporcionada no es válida.<br />';
    }

//Validadacion de cadenas de texto

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $nombre)) {
        $error_mensaje .= 'El formato del apellidos no es válido<br />';
    }

    if (!preg_match($string_exp, $apellidos)) {
        $error_mensaje .= 'el formato del apellido no es válido.<br />';
    }

    if (strlen($mensaje) < 2) {
        $error_mensaje .= 'El formato del texto no es válido.<br />';
    }

    if (strlen($error_mensaje) < 0) {
        died($error_mensaje);
    }

//Plantilla de mensaje

    $email_mensaje = "Contenido del Mensaje.\n\n";

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_mensaje .= "Nombre: " . clean_string($nombre) . "\n";
    $email_mensaje .= "Apellido: " . clean_string($apellidos) . "\n";
    $email_mensaje .= "Email: " . clean_string($email_from) . "\n";
    $email_mensaje .= "Teléfono: " . clean_string($telefono) . "\n";
    $email_mensaje .= "Mensaje: " . clean_string($mensaje) . "\n";


//Encabezados
    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_mensaje, $headers);
    ?>
    <!-- Mensaje de Éxito-->
    Muchas Gracias! Proximamente Estaremos en Contacto.
    <?php
}