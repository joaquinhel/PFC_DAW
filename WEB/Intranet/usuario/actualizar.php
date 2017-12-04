<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<?php
include_once '../../../PHP/BD/usuarioBD.php';
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?> 
            <div id='centro'>
                <h2> Modificar los datos guardados de un usuario</h2>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = usuarioBD::obtenerDatosUsuario($_GET['id']);
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaEmpleado()'>";
                    echo "<p>LOS DATOS ACTUALES DEL USUARIO A MODIFICAR SON: <p />";
                    echo "<input type = 'hidden' name = 'idUsuario' maxlength='4' value = '" . $todos->getIdUsuario() . "'><br />";
                    echo "<label>* LOGIN </label> <br/>";
                    echo "<input type = 'text' name = 'login' maxlength='45' id='login' required value = '" . $todos->getLogin() . "'><br />";
                    echo "<label>* PASSWORD </label> <br/>";
                    echo "<input type = 'text' name = 'pass' maxlength='20' id='pass' required value = " . $todos->getPass() . "><br />";
                    echo "<label>* FECHA DE ALTA </label> <br/>";
                    echo "<input type = 'date' name = 'fecha_alta' id='fecha' required value = " . $todos->getFecha_alta() . "><br />";
                    echo "<label>* NOMBRE </label> <br/>";
                    echo "<input type = 'text' name = 'nombre' id='nombre' required maxlength='20' value = " . $todos->getNombre() . "><br />";
                    echo "<label>* ESTADO </label> <br/>";
                    echo "<input type = 'date' name = 'estado' id='estado' required value = " . $todos->getEstado() . "><br />";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br /><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de usuarios</a>&emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarUsuario($row);
                    $_SESSION['id'] = $_GET['id'];
                    if ($validar) {
                        $row = array();
                        $row['idUsuario'] = $_POST['idUsuario'];
                        $row['login'] = $_POST['login'];
                        $row['pass'] = $_POST['pass'];
                        $row['fecha_alta'] = $_POST['fecha_alta'];
                        $row['nombre'] = $_POST['nombre'];
                        $row['estado'] = $_POST['estado'];
                        usuarioBD::actualizarUsuario($row);
                        echo "<p>Los datos han sido actualizados</p>";
                        echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    }
                    unset($_POST['actualizar']);
                    echo "<a href='actualizar.php?id=" . $_SESSION['id'] . "'>Pulse para volver</a>";
                }
                ?>
            </div>
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>
