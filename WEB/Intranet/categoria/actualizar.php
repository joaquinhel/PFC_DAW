<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/categoriaBD.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>   

        <?php
        if (!isset($_POST['actualizar'])) {
            $todos = categoriaBD::obtenerDatosCategoria($_GET['id']);
            echo "<form action ='actualizar.php' method = 'POST'>";
            echo "LOS DATOS ACTUALES DEL PRODUCTO A MODIFICAR SON: <br />";
            echo "ID <input type = 'text' name = 'idCategoria' value = " . $todos->getIdCategoria() . " /> <br />";
            echo "NOMBRE <input type = 'text' name = 'nombreCategoria' value = " . $todos->getNombreCategoria() . " />";
            echo "<br/>";
            echo "<input type = 'submit' value = 'Actualizar' id='actualizar' name = 'actualizar'/><br />";
            echo "<a href = 'listar.php'>Ir a listar</a>";
            echo "</form>";
        }
        elseif (isset($_POST['actualizar'])) {
            $row = array();
            $row['idCategoria'] = $_POST['idCategoria'];
            $row['nombreCategoria'] = $_POST['nombreCategoria'];
            categoriaBD::actualizarCategoria($row);
            echo "Los datos han sido actualizados";
            unset($_POST['actualizar']);
        }
        ?>


    </body>
</html>
