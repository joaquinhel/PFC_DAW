<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/usuarioBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = usuarioBD::obtenerDatosUsuario($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL USUARIO A MODIFICAR SON: <br />";
            echo "ID <input type = 'text' name = 'idUsuario' value = '" . $todos->getIdUsuario() . "'><br />";
            echo "LOGIN <input type = 'text' name = 'login' value = '" . $todos->getLogin() . "'><br />";
            echo "PASSWORD <input type = 'text' name = 'pass' value = " . $todos->getPass() . "><br />";
            echo "FECHA DE ALTA <input type = 'text' name = 'fecha_alta' value = " . $todos->getFecha_alta() . "><br />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        } elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idUsuario'] = $_POST['idUsuario'];
            $row['login'] = $_POST['login'];
            $row['pass'] = $_POST['pass'];
            $row['fecha_alta'] = $_POST['fecha_alta'];
            usuarioBD::actualizarUsuario($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>
    </body>
</html>
