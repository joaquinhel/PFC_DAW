<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR USUARIO</title>
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

            <?php
            include_once '../../../PHP/BD/usuarioBD.php';
            require_once '../../../PHP/BD/Validaciones.php';
            if (isset($_POST['insertar'])) {
                $row['login'] = $_POST['login'];
                $row['pass'] = $_POST['pass'];
                $row['fecha_alta'] = $_POST['fecha_alta'];
                $row['nombre'] = $_POST['nombre'];
                $row['estado'] = $_POST['estado'];


                $validar = Validaciones::controlarUsuario($row);
                if ($validar) {
                    usuarioBD::insertarUsuario($row);
                }
            }
            ?>
            <h2>INTRODUCIR UN NUEVO USUARIO</h2>
            <div id="error">
            </div>
            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" 
                  onsubmit="return controlarUsuario()"> 
                <p>Introduzca los datos del usuario: <p/>
                    <label for="login">* Login: </label>
                    <input type="text" name="login" id='login' maxlength='45'/><br/>
                    <label for="pass">* Pass: </label>
                    <input type="text" name="pass" id='pass' maxlength='20'/><br/>
                    <label for="fecha">* Fecha de Alta: </label>
                    <input type="date" name="fecha_alta" id='fecha'/><br/>
                    <label for="nombre">* Nombre: </label>
                    <input type="text" name="nombre" maxlength='45' id='nombre'/><br/>

                    <label for="estado">* Estado: </label>
                    <select name="estado">
                        <option value="B">Borrado</option>
                        <option value="A">Activo</option>
                    </select> <br/>                        

                    <input type="submit" name="insertar" value="Introducir Nuevo"/><br/>
                    <a href="listar.php">Volver al listado de usuarios</a>&emsp;
                    <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
            </form> 
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>

