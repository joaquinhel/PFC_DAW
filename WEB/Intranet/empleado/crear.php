<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
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
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?>

            <?php
            include_once '../../../PHP/BD/empleadoBD.php';
            if (isset($_POST['insertar'])) {
                $row[0] = $_POST['nombreEmpleado'];
                $row[1] = $_POST['apellidos'];
                $row[2] = $_POST['direccion'];
                $row[3] = $_POST['telefono'];
                $row[4] = $_POST['email'];
                $row[5] = $_POST['fechaContratacion'];
                $row[6] = $_POST['sueldo'];
                $row[7] = $_POST['nif'];
                $row[8] = $_POST['estado'];
                empleadoBD::insertarEmpleado($row);
            }
            ?>
            <div id='centro'>
                <h2>INTRODUCIR UN NUEVO EMPLEADO</h2>
                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return recuperarDatos()">
                    <p>Introduzca los datos del empleado: </p>
                    <label>Nombre: </label><input type='text' name='nombreEmpleado' id='nombreEmpleado' maxlength='40'/><br/>
                    <label>Apellidos: </label><input type='text' name='apellidos' id='apellidos' maxlength='45'/><br/>
                    <label>Dirección: </label><input type='text' name='direccion' id='direccion' maxlength='45'/><br/>
                    <label>Teléfono: </label><input type='text' name='telefono' id='telefono' maxlength='12'/><br/>
                    <label>Email: </label><input type='text' name='email' id='email' maxlength='45'/><br/>
                    <label>Fecha de Contratacion:  </label><input type='date' name='fechaContratacion' id='fechaContratacion'/><br/>
                    <label>Sueldo: </label><input type='text' name='sueldo' id='sueldo' maxlength='7'/><br/>
                    <label>NIF: </label><input type='text' name='nif' id='nif' maxlength='7'/><br/>
                    <label>Estado: </label><input type='text' name='estado' id='estado' maxlength='7'/><br/>
                    <input type='submit' name='insertar' value='Introducir Nuevo'/><br/>
                    <a href='listar.php'>Volver al listado de empleados</a>&emsp;
                    <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>    
                </form> 
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

