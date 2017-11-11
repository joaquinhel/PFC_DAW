<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/categoriaBD.php';
include_once '../../../PHP/ControlSesion.php';
CargarSesion::iniciarSesion();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?>
            <h2> MODIFICAR UNA CATEGORIA DE PRODUCTOS</h2>
            <?php
            if (!isset($_POST['actualizar'])) {

                $todos = categoriaBD::obtenerDatosCategoria($_GET['id']);
                echo "<form action ='actualizar.php' method = 'POST'>";
                echo "LOS DATOS ACTUALES DE LA CATEGORIA A MODIFICAR SON: <br />";
                echo "<label>ID </label> <br/>";
                echo "<input type = 'text' name = 'idCategoria' disabled maxlength='4' value = " . $todos->getIdCategoria() . " /> <br />";
                echo "<label>NOMBRE</label> <br/>";
                echo "<input type = 'text' name = 'nombreCategoria' maxlength='35' value = " . $todos->getNombreCategoria() . " />";
                echo "<br/><br />";
                echo "<input type = 'submit' value = 'Pulse para Actualizar con los datos introducidos' id='actualizar' name = 'actualizar'/><br />";
                echo "<a href = 'listar.php'>Volver a la lista de categorias</a> &emsp;&emsp;";
                echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                echo "</form>";
            } elseif (isset($_POST['actualizar'])) {
                $row = array();
                $row['idCategoria'] = $_POST['idCategoria'];
                $row['nombreCategoria'] = $_POST['nombreCategoria'];
                categoriaBD::actualizarCategoria($row);
                echo "Los datos han sido actualizados";
                unset($_POST['actualizar']);
            }
            ?>
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>
