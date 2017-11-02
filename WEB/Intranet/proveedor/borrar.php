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
            include_once '../../../PHP/BD/proveedorBD.php';
            $todos = proveedorBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Dirección</th><th>Nombre Empresa</th> <th>Persona Contacto</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdProveedor() . "</td> <td>" . $aux->getDireccion() . "</td>"
                . "<td>" . $aux->getNombreEmpresa() . "</td><td>" . $aux->getPersonaContacto() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdProveedor() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdProveedor() . "'>Borrar</a></tr>";
            }
            echo "</table>";

            if (isset($_POST['enviar'])) {
                proveedorBD::borrarProveedor($_POST['id']);
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
