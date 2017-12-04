<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php include_once "../../crearSesion.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>BORRAR EMPLEADO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <?php
    include_once '../comunes/menu.php';
    ?>
    <div id="contenedor">
        <?php
        include_once '../comunes/cabecera.php';
        ?>
        <div id='centro'>

            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                 <h1> BORRAR UN EMPLEADO </h1>
                    <p> Introduzca el id del empleado a borrar </p>
                <label>ID categoria</label><input type='text' name='id' maxlength='4'/><br/>
                <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
            </form>

            <?php
            include_once '../../../PHP/BD/empleadoBD.php';
            if (isset($_POST['enviar'])) {
                empleadoBD::borrarEmpleado($_POST['id']);
                echo "El registro se ha borrado";
            }
            echo "<h1>LISTADO DE EMPLEADOS</h1>";
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
            <a href="listar.php">Volver al listado de empleados</a>&emsp;
            <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>


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
