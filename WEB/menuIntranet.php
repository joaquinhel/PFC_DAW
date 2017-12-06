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
        <link rel="icon" type="image/png" href="../imagenes/iconos/centroOptico.png" />
    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once 'menuLogin.php';
            ?>
            <?php
            include_once 'cabecera.php';
            ?>
            <div>
                <h1>MENU PRIVADO <br/>
                    SELECCIONE UNO DE LOS SIGUIENTES ENLACES</h1>

                <div id='menuIntranet'>
                    <p> <a class='psin' href='Intranet/categoria/listar.php'>CATEGORIA DE LOS PRODUCTOS</a> </p>
                    <p> <a class='psin' href='Intranet/cliente/listar.php'>LISTADO DE CLIENTES</a>  </p>
                    <p> <a class='psin' href='Intranet/empleado/listar.php'>HISTORICO DE EMPLEADOS</a>  </p>
                    <p> <a class='psin' href='Intranet/producto/listar.php'>PRODUCTOS DISPONIBLES</a>  </p>
                    <p> <a class='psin' href='Intranet/proveedor/listar.php'>LISTADO DE PROVEEDORES</a>  </p>
                    <p> <a class='psin' href='Intranet/pruebaCliente/listar.php'>PRUEBAS REALIZADAS - PROGRAMADAS</a>  </p>
                    <p> <a class='psin' href='Intranet/prueba/listar.php'>PRUEBAS DIAGNOSTICAS</a>  </p>
                    <p> <a class='psin' href='Intranet/usuario/listar.php'>USUARIOS REGISTRADOS</a> </p>
                </div>
                <?php
                include_once 'pie.php';
                ?>
            </div>
            <?php
            include_once 'footer.php';
            ?>
        </div> 
    </body>
</html>
