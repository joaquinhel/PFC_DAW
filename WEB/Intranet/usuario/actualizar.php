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
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?> 
            <div id='centro'>
                <h1> EDITAR LOS DATOS GUARDADOS DE UN USUARIO</h1>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = usuarioBD::obtenerDatosUsuario($_GET['id']);
                    $_SESSION['id'] = $_GET['id'];
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaUsuario()'>";
                    echo "<p class='psin'>LOS DATOS A MODIFICAR DEL USUARIO CON ID= " . $_GET['id'] . " SON:<p/>";
                    echo "<input type = 'hidden' name = 'idUsuario' maxlength='4' value = '" . $todos->getIdUsuario() . "'><br />";
                    echo "<label for='login'>*LOGIN </label>";
                    echo "<input type = 'text' name = 'login' maxlength='45' id='login' required value = '" . $todos->getLogin() . "'><br />";
                    echo "<label for='pass'>*PASSWORD </label>";
                    echo "<input type = 'text' name = 'pass' maxlength='20' id='pass' required value = " . $todos->getPass() . "><br />";
                    echo "<label for='fecha'>*FECHA ALTA </label>";
                    echo "<input type = 'date' name = 'fecha_alta' id='fecha' required value = " . $todos->getFecha_alta() . "><br />";
                    echo "<label>*NOMBRE </label>";
                    echo "<input type = 'text' name = 'nombre' id='nombre' required maxlength='20' value = " . $todos->getNombre() . "><br />";
                    echo "<label for = 'estado'>* Estado: </label>";
                    echo "<select name = 'estado'>";
                    echo "<option value=" . $todos->getEstado() . "> " . $todos->getEstado() . "</option>";
                    echo "<option value = 'B'>Borrado</option>";
                    echo "<option value = 'A'>Activo</option>";
                    echo "</select>";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de usuarios</a>&emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idUsuario'] = $_POST['idUsuario'];
                    $row['login'] = $_POST['login'];
                    $row['pass'] = $_POST['pass'];
                    $row['fecha_alta'] = $_POST['fecha_alta'];
                    $row['nombre'] = $_POST['nombre'];
                    $row['estado'] = $_POST['estado'];

                    global $js; //Variable para controlar si entra o no al js
                    $js = 0;
                    echo "<noscript>"; //Cuando está desactivado javascript
                    $js = 1;
                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarUsuario($row);
                    if ($validar) {
                        usuarioBD::actualizarUsuario($row);
                    }
                    echo "</noscript>";
                    if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                        usuarioBD::actualizarUsuario($row);
                    }
                    unset($_POST['actualizar']);
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    ?>&emsp;<?php
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
