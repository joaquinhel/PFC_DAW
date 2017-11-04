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
            <h1>LISTADO DE PRUEBAS DIAGNOSTICAS</h1>
            <?php
            include_once '../../../PHP/BD/pruebaBD.php';
            $todos = pruebaBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>idPrueba</th><th>nombrePrueba</th><th>aparatosNecesarios</th><th>Acciones</th>"
            . "</tr>";

            foreach ($todos as $aux) {
                echo "<tr>"
                . "<td>" . $aux->getIdPrueba() . "</td> "
                . "<td>" . $aux->getNombrePrueba() . "</td>"
                . "<td>" . $aux->getAparatosNecesarios() . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPrueba() . "'>Borrar</a></tr>";
            }
            echo "</table>";

            if (isset($_POST['enviar'])) {
                pruebaBD::borrarPrueba($_POST['id']);
                echo "El registro se ha borrado";
            }
            ?>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <p> INTRODUZCA EL IDENTIFICADOR DE LA PRUEBA A BORRAR </p>
                <label>ID categoria</label><input type='text' name='id'/><br/>
                <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                <a href="listar.php">Volver a la lista de categorias</a>
            </form>
        </div>
    </body>
</html>
