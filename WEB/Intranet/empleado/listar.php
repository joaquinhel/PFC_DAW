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
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <h1>LISTADO DE EMPLEADOS</h1>
                <input type='submit' value='Crear Nuevo Registro' class='navegacion' id='crear' name='crear' onclick = "location = './crear.php'"/>
                <div>
                    <?php
                    include_once '../../../PHP/BD/empleadoBD.php';
                    $todos = empleadoBD::listarTodos();
                    echo "<table border=1px>";
                    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th> <th>Dirección</th> "
                    . "<th>Telefono</th> <th>Email</th><th>FechaContratación</th><th>Sueldo</th>"
                    . "<th>nif</th><th>Estado</th><th>Acciones</th></tr>";

                    foreach ($todos as $aux) {
                        echo "<tr><td>" . $aux->getIdEmpleado() . "</td>"
                        . " <td>" . $aux->getNombreEmpleado() . "</td>"
                        . "<td>" . $aux->getApellidos() . "</td>"
                        . "<td>" . $aux->getDireccion() . "</td>"
                        . "<td>" . $aux->getTelefono() . "</td>"
                        . "<td>" . $aux->getEmail() . "</td>"
                        . "<td>" . $aux->getFechaContratacion() . "</td>"
                        . "<td>" . $aux->getSueldo() . "</td>"
                        . "<td>" . $aux->getNif() . "</td>"
                        . "<td>" . $aux->getEstado() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getIdEmpleado() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdEmpleado() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";
                    ?>
                    <br/>
                    <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la Intranet</a><br/>
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