<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
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
                    . "<td>" . $aux->getCliente_idCliente() . "</td>"
                    . "<td>" . $aux->getPrueba_idPrueba() . "</td>"
                    . "<td>" . $aux->getFechaPrueba() . "</td> "
                    . "<td>" . $aux->getDiagnostico() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getCliente_idCliente() . "&ida=" . $aux->getPrueba_idPrueba() . "'>Borrar</a></tr>";
                }
                echo "</table>";

                if (isset($_POST['enviar'])) {
                    pruebaClienteBD::borrarPruebaCliente($_POST['id'], $_POST['ida']);
                    echo "El registro se ha borrado";
                }
                ?>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <p> INTRODUZCA EL IDENTIFICADOR DE LA PRUEBA Y EL CLIENTE A BORRAR </p>
                    <label>ID prueba</label><input type='text' name='id'/><br/>
                    <label>ID cliente</label><input type='text' name='ida'/><br/>
                    <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                    <a href="listar.php">Volver al listado de Pruebas - Clientes</a>&emsp;
                    <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
                </form>
            </div>
    </body>
</html>
