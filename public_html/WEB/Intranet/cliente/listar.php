<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LISTAR CLIENTES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../css/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <h1>LISTADO DE CLIENTES</h1><br/>
                <input type='submit' value='Crear Nuevo Registro' class='navegacion' id='crear' name='crear' onclick = "location = './crear.php'"/>

                <div>
                    <?php
                    include_once '../../../PHP/BD/clienteBD.php';
                    $todos = clienteBD::listarTodos();
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th> <th>Dirección</th> <th> Email </th>"
                    . "<th>Telefono</th><th>NIF</th><th>Acciones</th></tr>";

                    foreach ($todos as $aux) {
                        echo "<tr class='marcar'><td>" . $aux->getIdCliente() . "</td> "
                        . "<td>" . $aux->getNombreCliente() . "</td>"
                        . "<td>" . $aux->getApellidos() . "</td>"
                        . "<td>" . $aux->getDireccion() . "</td>"
                        . "<td>" . $aux->getEmail() . "</td>"
                        . "<td>" . $aux->getTelefono() . "</td>"
                        . "<td>" . $aux->getNif() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getIdCliente() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdCliente() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";
                    ?>
                    <br/>
                    <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la INTRANET</a><br/>
                </div> <br/><br/>
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