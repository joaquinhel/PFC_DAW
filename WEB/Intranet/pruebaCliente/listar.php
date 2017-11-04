<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <h1>LISTADO DE PRUEBAS A CLIENTES PROGRAMADAS</h1>
            <input type='submit' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <?php
            include_once '../../../PHP/BD/pruebaClienteBD.php';
            $todos = pruebaClienteBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID Prueba</th><th>ID CLIENTE</th><th>FECHA</th><th>DIAGNOSTICO</th><th>ACCIONES</th>"
            . "</tr>";

            foreach ($todos as $aux) {
                echo "<tr>"
                . "<td>" . $aux->getPrueba_idPrueba() . "</td>"
                . "<td>" . $aux->getCliente_idCliente() . "</td>"
                . "<td>" . $aux->getFechaPrueba() . "</td> "
                . "<td>" . $aux->getDiagnostico() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getPrueba_idPrueba() . "&ida=" . $aux->getCliente_idCliente() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <br>
                <a id='volver' href="../../menuIntranet.php">Volver al Menú de la Intranet</a>
        </div>
    </body>
</html>