<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/usuarioBD.php';
include_once '../PHP/controlSesion.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?> 
            <h2> Modificar los datos guardados de un usuario</h2>

            <?php
            if (!isset($_POST['actualizar'])) {
                $todos = usuarioBD::obtenerDatosUsuario($_GET['id']);
                echo "<form action ='actualizar.php' method = 'POST'>";
                echo "<p>LOS DATOS ACTUALES DEL USUARIO A MODIFICAR SON: <p />";
                echo "<label>ID </label> <br/>";
                echo "<input type = 'text' name = 'idUsuario' maxlength='4' disabled value = '" . $todos->getIdUsuario() . "'><br />";
                echo "<label>LOGIN </label> <br/>";
                echo "<input type = 'text' name = 'login' maxlength='45' value = '" . $todos->getLogin() . "'><br />";
                echo "<label>PASSWORD </label> <br/>";
                echo "<input type = 'text' name = 'pass' maxlength='20' value = " . $todos->getPass() . "><br />";
                echo "<label>FECHA DE ALTA </label> <br/>";
                echo "<input type = 'date' name = 'fecha_alta' value = " . $todos->getFecha_alta() . "><br />";
                echo "<br/>";
                echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                echo "<a href = 'listar.php'>Volver a la lista de usuarios</a>&emsp;&emsp;";
                echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
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
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>
