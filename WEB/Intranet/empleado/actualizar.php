<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/empleadoBD.php';
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MODIFICAR EMPLEADO</title>
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
                <h1> MODIFICAR UN EMPLEADO </h1>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = empleadoBD::obtenerDatosEmpleado($_GET['id']);
                    $_SESSION['id'] = $_GET['id'];
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaEmpleado()'>";
                    echo "<p class='psin'>LOS DATOS A MODIFICAR DEL EMPLEADO CON ID= " . $_GET['id'] . " SON:<p/>";
                    echo "<input type = 'hidden' name = 'idEmpleado' id='idEmpleado' maxlength='4' value = " . $todos->getIdEmpleado() . ">";
                    echo "<label>* NOMBRE </label>";
                    echo "<input type = 'text' name = 'nombreEmpleado'id='nombre' required  maxlength='40' value = " . $todos->getNombreEmpleado() . "><br />";
                    echo "<label>* APELLIDOS</label>";
                    echo "<input type = 'text' name = 'apellidos' id='apellido' required  maxlength='45' value = " . $todos->getApellidos() . "><br />";
                    echo "<label>DIRECCIÓN </label>";
                    echo "<input type = 'text' name = 'direccion' id='direccion'  maxlength='45' value = " . $todos->getDireccion() . "><br />";
                    echo "<label>* TELÉFONO </label>";
                    echo "<input type = 'text' name = 'telefono' id='telefono' required  maxlength='12' value = " . $todos->getTelefono() . "><br />";
                    echo "<label>EMAIL </label>";
                    echo "<input type = 'text' name = 'email' id='email' maxlength='45' value = " . $todos->getEmail() . "><br />";
                    echo "<label>*FECHA ALTA </label>";
                    echo "<input type = 'date' name = 'fechaContratacion' id='fecha' required  value = " . $todos->getFechaContratacion() . "><br />";
                    echo "<label>* SUELDO </label>";
                    echo "<input type = 'text' name = 'sueldo' maxlength='7' id='sueldo' required value = " . $todos->getSueldo() . "><br />";
                    echo "<label>* NIF </label>";
                    echo "<input type = 'text' name = 'nif' id='nif' required maxlength='9' value = " . $todos->getNif() . "><br />";
                    echo "<label for = 'estado'>* Estado: </label>";
                    echo "<select name = 'estado'>";
                    echo "<option value=" . $todos->getEstado() . "> " . $todos->getEstado() . "</option>";
                    echo "<option value = 'B'>Borrado</option>";
                    echo "<option value = 'A'>Activo</option>";
                    echo "</select>";
                    echo "<br/>";
                    echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br/>";
                    echo "<a href = 'listar.php'>Volver a la lista de empleados </a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    $row = array();
                    $row['idEmpleado'] = $_POST['idEmpleado'];
                    $row['nombreEmpleado'] = $_POST['nombreEmpleado'];
                    $row['apellidos'] = $_POST['apellidos'];
                    $row['direccion'] = $_POST['direccion'];
                    $row['telefono'] = $_POST['telefono'];
                    $row['email'] = $_POST['email'];
                    $row['fechaContratacion'] = $_POST['fechaContratacion'];
                    $row['sueldo'] = $_POST['sueldo'];
                    $row['nif'] = $_POST['nif'];
                    $row['estado'] = $_POST['estado'];

                    global $js; //Variable para controlar si entra o no al js
                    $js = 0;
                    echo "<noscript>"; //Cuando está desactivado javascript
                    $js = 1;
                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarEntradaEmpleado($row);
                    if ($validar) {
                        empleadoBD::actualizarEmpleado($row);
                    }
                    echo "</noscript>";
                    if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                        empleadoBD::actualizarEmpleado($row);
                    }
                    unset($_POST['actualizar']);
                    echo "<p>Los datos han sido actualizados</p>";
                    echo "<a href = 'listar.php'>Pulse para volver al listado</a>&emsp;";
                    echo "<a href='actualizar.php?id=" . $_SESSION['id'] . "'>Pulse para volver a actualizar</a>";
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
