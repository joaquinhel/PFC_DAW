<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <?php
            include_once '../../../PHP/BD/empleadoBD.php';
            $todos = empleadoBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th> <th>Dirección</th> "
            . "<th>Telefono</th> <th>Email</th><th>FechaContratación</th><th>Sueldo</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdEmpleado() . "</td> <td>" . $aux->getNombreEmpleado() . "</td>"
                . "<td>" . $aux->getApellidos() . "</td><td>" . $aux->getDireccion() . "</td>"
                . "<td>" . $aux->getTelefono() . "</td><td>" . $aux->getEmail() . "</td>"
                . "<td>" . $aux->getFechaContratacion() . "</td><td>" . $aux->getSueldo() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdEmpleado() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdEmpleado() . "'>Borrar</a></tr>";
            }
            echo "</table>";

            if (isset($_POST['enviar'])) {
                empleadoBD::borrarEmpleado($_POST['id']);
                echo "El registro se ha borrado";
            }
            ?>

            INTRODUZCA EL IDENTIFICADOR DEL PRODUCTO A BORRAR
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type='text' name='id'/>
                <input type='submit' name='enviar' value='enviar'/>
            </form>
            <a href="listar.php">Ir a listar</a>
        </div>
    </body>
</html>
