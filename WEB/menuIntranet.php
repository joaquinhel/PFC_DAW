<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once 'crearSesion.php';
        ?>

        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <?php
        include_once 'menuLogin.php';
        ?>
        <div id="contenedor">
            <?php
            include_once 'cabecera.php';
            ?>
            <div>
                <h1>MENU PRIVADO</h1>
                <a href='Intranet/categoria/listar.php'>CATEGORIA DE LOS PRODUCTOS</a> <br />
                <a href='Intranet/cliente/listar.php'>LISTADO DE CLIENTES</a> <br />
                <a href='Intranet/empleado/listar.php'>HISTORICO DE EMPLEADOS</a> <br />
                <a href='Intranet/producto/listar.php'>PRODUCTOS DISPONIBLES</a> <br />
                <a href='Intranet/proveedor/listar.php'>LISTADO DE PROVEEDORES</a> <br />
                <a href='Intranet/pruebaCliente/listar.php'>PRUEBAS REALIZADAS - PROGRAMADAS</a> <br />
                <a href='Intranet/prueba/listar.php'>PRUEBAS DIAGNOSTICAS</a> <br />
                <a href='Intranet/usuario/listar.php'>USUARIOS REGISTRADOS</a>
                </form>
                <?php
                include_once 'pie.php';
                ?>
            </div>
            <?php
            include_once 'footer.php';
            ?>
    </body>
</html>
