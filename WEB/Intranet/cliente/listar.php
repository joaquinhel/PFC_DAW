<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <h1>LISTADO DE CATEGORIAS DE CLIENTES</h1>
        <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>

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
            ?>
            <br/>
            <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
        </div>
    </body
</html>