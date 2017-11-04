<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>LISTADO DE CATEGORIAS DE CLIENTES</h1>
        <div>
            <?php
            include_once '../../../PHP/BD/clienteBD.php';
            $todos = clienteBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th> <th>Dirección</th> <th>Telefono</th> <th>NIF</th><th>Acciones</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdCliente() . "</td> <td>" . $aux->getNombreCliente() . "</td>"
                . "<td>" . $aux->getApellidos() . "</td><td>" . $aux->getDireccion() . "</td>"
                . "<td>" . $aux->getTelefono() . "</td><td>" . $aux->getNif() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdCliente() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdCliente() . "'>Borrar</a></tr>";
            }
            echo "</table>";

            if (isset($_POST['enviar'])) {
                clienteBD::borrarCliente($_POST['id']);
                echo "El registro se ha borrado";
            }
            ?>      
            
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <p> INTRODUZCA EL IDENTIFICADOR DEL CLIENTE A BORRAR </p>
                <label>ID categoria</label><input type='text' name='id'/><br/>
                <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                <a href="listar.php">Volver a la lista de clientes</a>
            </form>
        </div>
    </body>
</html>
