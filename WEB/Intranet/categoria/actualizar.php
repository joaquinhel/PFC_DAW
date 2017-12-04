<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<?PHP
include_once '../../../PHP/BD/categoriaBD.php';
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MODIFICAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <h1> MODIFICAR UNA CATEGORIA DE PRODUCTOS</h1>
                <div id="error">
                </div>
                <?php
                if (!isset($_POST['actualizar'])) {
                    $todos = categoriaBD::obtenerDatosCategoria($_GET['id']);
                    $_SESSION['id'] = $_GET['id'];
                    echo "<form action ='actualizar.php' method = 'POST' onsubmit='return controlarEntradaCategoria()'>";
                    echo "<p>LOS DATOS QUE PUEDE MODIFICAR DE LA CATEGORIA SELECCIONADA (ID= " . $_GET['id'] . ") SON: </p> <br />";
                    echo "<input type = 'hidden' name = 'idCategoria' id='idCategoria' maxlength='35' value = " . $todos->getIdCategoria() . " />";
                    echo "<label for='nombre'>* NOMBRE</label> <br/>";
                    echo "<input type = 'text' name = 'nombreCategoria' id='nombre' maxlength='35' value = " . $todos->getNombreCategoria() . " />";
                    echo "<br/><br />";
                    echo "<input type = 'submit' value = 'Pulse para Actualizar con los datos introducidos' id='actualizar' name = 'actualizar'/><br />";
                    echo "<a href = 'listar.php'>Volver a la lista de categorias</a> &emsp;&emsp;";
                    echo "<a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>";
                    echo "</form>";
                } else if (isset($_POST['actualizar'])) {
                    require_once '../../../PHP/BD/Validaciones.php';
                    $validar = Validaciones::controlarEntradaCategoria($_POST['nombreCategoria']);

                    if ($validar) {
                        $row = array();
                        $row['idCategoria'] = $_POST['idCategoria'];
                        $row['nombreCategoria'] = $_POST['nombreCategoria'];

                        categoriaBD::actualizarCategoria($row);
                        echo "<p>Los datos han sido actualizados</p>";
                        echo "<a href = 'listar.php'>Pulse para volver al listado</a><br />";
                    }
                    unset($_POST['actualizar']);
                    echo "<a href='actualizar.php?id=" . $_SESSION['id'] . "'>Pulse para volver</a>";
                }
                ?>
            </div>
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>
