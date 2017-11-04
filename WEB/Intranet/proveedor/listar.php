<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <h1>LISTADO DE CATEGORIAS DE PROVEEDORES</h1>
            <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <?php
            include_once '../../../PHP/BD/proveedorBD.php';
            $todos = proveedorBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID</th><th>Dirección</th><th>Nombre Empresa</th> <th>Persona Contacto</th> <th>Acciones</th></tr>";

            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux->getIdProveedor() . "</td> <td>" . $aux->getDireccion() . "</td>"
                . "<td>" . $aux->getNombreEmpresa() . "</td><td>" . $aux->getPersonaContacto() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdProveedor() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdProveedor() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <br>
                <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
        </div>
    </body>
</html>