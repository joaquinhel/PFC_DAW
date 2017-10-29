
<?php
include_once '../../../PHP/BD/proveedorBD.php';
?>

<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <a href=""></a>


    <body>
        <div>
            <?php
            $todos = ProveedorBD::obtienerProveedores();
            echo "<table border=1px>";
            echo "<tr><td>ID</td><td>Nombre</td></tr>";
/*
            foreach ($todos as $aux) {
                echo "<tr><td>" . $aux . "</td>"
                . "<td>" . $aux . "</td></tr>"
                ;
            }*/
            echo "</table>";
            ?>

        </div>
    </body>
</html>
