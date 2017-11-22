<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR EMPLEADO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
       <!-- <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>-->
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
            require_once '../../../PHP/BD/Validaciones.php';

            if (isset($_POST['insertar'])) {
                $row['nombreEmpleado'] = $_POST['nombreEmpleado'];
                $row['apellidos'] = $_POST['apellidos'];
                $row['direccion'] = $_POST['direccion'];
                $row['telefono'] = $_POST['telefono'];
                $row['email'] = $_POST['email'];
                $row['fechaContratacion'] = $_POST['fechaContratacion'];
                $row['sueldo'] = $_POST['sueldo'];
                $row['nif'] = $_POST['nif'];
                $row['estado'] = $_POST['estado'];

                $validar = Validaciones::controlarEntradaCategoria($row);
                if ($validar) {
                    empleadoBD::insertarEmpleado($row);
                }
            }
            ?>
            <div id='centro'>
                <h2>INTRODUCIR UN NUEVO EMPLEADO</h2>
                <div id="error">
                </div>
                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" 
                      onsubmit="return controlarEntradaEmpleado()">
                    <p>Introduzca los datos del empleado: </p>
                    <label for="nombre">* Nombre: </label>
                    <input type='text' name='nombreEmpleado' id='nombre' required maxlength='40'/><br/>
                    <label for="apellido">* Apellidos: </label>
                    <input type='text' name='apellidos' id='apellido' required maxlength='45'/><br/>
                    <label for="direccion">Dirección: </label>
                    <input type='text' name='direccion' id='direccion' maxlength='45'/><br/>
                    <label for="telefono">* Teléfono: </label>
                    <input type='text' name='telefono' id='telefono' required maxlength='12'/><br/>
                    <label for="email">Email: </label>
                    <input type='email' name='email' id='email' maxlength='45'/><br/>
                    <label for="fechaContratacion"> * Fecha Contratacion:  </label>
                    <input type='date' name='fechaContratacion' id='fechaContratacion' required/><br/>
                    <label for="sueldo">* Sueldo: </label>
                    <input type='text' name='sueldo' id='sueldo' maxlength='7'/><br/>
                    <label for="nif">* NIF: </label><input type='text' name='nif' id='nif' required maxlength='9'/><br/>

                    <label for="estado">* Estado: </label>
                    <select name="estado">
                        <option value="B">Borrado</option>
                        <option value="A">Activo</option>
                    </select> <br/>

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

