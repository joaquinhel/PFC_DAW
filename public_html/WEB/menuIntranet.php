<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once 'crearSesion.php';
        ?>

        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../css/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/inicio.css" rel="stylesheet" type="text/css"/>
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
                    <p> <a class='psin' href='Intranet/categoria/listar.php'><ins>CATEGORIA DE LOS PRODUCTOS</ins></a> </p>
                    <p> <a class='psin' href='Intranet/cliente/listar.php'><ins>LISTADO DE CLIENTES</ins></a>  </p>
                    <p> <a class='psin' href='Intranet/empleado/listar.php'><ins>HISTORICO DE EMPLEADOS</ins></a>  </p>
                    <p> <a class='psin' href='Intranet/producto/listar.php'><ins>PRODUCTOS DISPONIBLES</ins></a>  </p>
                    <p> <a class='psin' href='Intranet/proveedor/listar.php'><ins>LISTADO DE PROVEEDORES</ins></a>  </p>
                    <p> <a class='psin' href='Intranet/pruebaCliente/listar.php'><ins>PRUEBAS REALIZADAS - PROGRAMADAS</ins></a>  </p>
                    <p> <a class='psin' href='Intranet/prueba/listar.php'><ins>PRUEBAS DIAGNOSTICAS</ins></a>  </p>
                    <p> <a class='psin' href='Intranet/usuario/listar.php'><ins>USUARIOS REGISTRADOS</ins></a> </p>
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
