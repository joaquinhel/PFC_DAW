<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR CATEGORIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
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

            <?php
            include_once '../../../PHP/BD/pruebaClienteBD.php';
            include_once '../../../PHP/BD/clienteBD.php';
            include_once '../../../PHP/BD/pruebaBD.php';
            if (isset($_POST['insertar'])) {
                $row[0] = $_POST['cliente_idCliente'];
                $row[1] = $_POST['prueba_idPrueba'];
                $row[2] = $_POST['fechaPrueba'];
                $row[3] = $_POST['diagnostico'];

                pruebaClienteBD::insertarPruebaCliente($row);
            }
            ?>
            <div id="error">
            </div>
            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" 
                  onsubmit="return controlarEntradaPruebaCliente()"> 
                <label>Introduzca los datos del prueba: </label> <br/>
                <label for="cliente">Cliente: </label>
                <select name="cliente_idCliente" id="cliente" required>  
                    <?php
                    $todos1 = clienteBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value=" . $id->getIdCliente() . ">" . $id->getNif() . "</option>";
                    }
                    ?>   
                </select>
                <br/>

                <label for="prueba">Prueba: </label>
                <select name="prueba_idPrueba" id='prueba' required>  
                    <?php
                    $todos1 = pruebaBD::listarTodos();
                    foreach ($todos1 as $id) {
                        echo "<option value=" . $id->getIdPrueba() . ">" . $id->getNombrePrueba() . "</option>";
                    }
                    ?>   
                </select><br/>

                <label for="fecha">Fecha: </label>
                <input type="date" name="fechaPrueba" required/><br/> 

                <label for="diagnostico"> Diagnostico: </label>
                <input type="text" name="diagnostico" maxlength='45' required/><br/>

                <input type="submit" name="insertar" value="Introducir Nuevo"/><br/>
                <a href="listar.php">Volver al listado de pruebas - clientes </a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
            </form> 
            <?php
            include_once '../comunes/pie.php';
            ?>
        </div>
        <?php
        include '../comunes/footer.php';
        ?>
    </body>
</html>

