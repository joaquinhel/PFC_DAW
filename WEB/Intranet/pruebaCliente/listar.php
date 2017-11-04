<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <?php
            include_once '../../../PHP/BD/pruebaClienteBD.php';
            $todos = pruebaClienteBD::listarTodos();
            echo "<table border=1px>";
            echo "<tr><th>ID Cliente</th><th>ID Prueba</th>"
            . "<th> Diagnostico</th><th>Fecha de la Prueba</th>"
            . "</tr>";
/*
            foreach ($todos as $aux) {
                echo "<tr>"
                . "<td>" . $aux-> . "</td> "
                . "<td>" . $aux-> . "</td>"
                . "<td>" . $aux-> . "</td>"
                . "<td> <a href='actualizar.php?id=" . $aux->getIdPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPrueba() . "'>Borrar</a></tr>";
            }
            echo "</table>";
            ?>
            <input type='submit' value='crear' id='crear' name='crear' onclick = "location = './crear.php'"/>
            <a href="../../menuIntranet.php">Ir a menú</a>
        </div>
    </body>
</html>