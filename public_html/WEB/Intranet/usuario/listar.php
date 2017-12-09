<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../css/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
        <script src="../../../js/miscript.js" type="text/javascript"></script>

    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <h1>LISTADO DE USUARIOS</h1><br/>
                <div>
                    <input type='submit' value='Crear Nuevo Registro' class='navegacion' id='crear' name='crear' onclick = "location = './crear.php'"/>
                    <?php
                    include_once '../../../PHP/BD/usuarioBD.php';
                    $todos = usuarioBD::listarTodos();
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Login</th>"
                    . "<th>Nombre</th> <th>Estado</th> <th>Acciones</th></tr>";

                    foreach ($todos as $aux) {
                        echo "<tr><td>" . $aux->getIdUsuario() . "</td>"
                        . "<td>" . $aux->getLogin() . "</td>"
                        . "<td>" . $aux->getNombre() . "</td>"
                        . "<td>" . $aux->getEstado() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getIdUsuario() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdUsuario() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";
                    ?>
                    <br>
                        <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la INTRANET</a><br/> <br/> 
                        <button id='btnajax' data-user="[1,2,3,4,5,6,7,8,9]">Pulsar para ver el detalle de los usuarios</button>
                </div>
                <br/>
                <div id="response-container">
                </div>
                <br/><br/>
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