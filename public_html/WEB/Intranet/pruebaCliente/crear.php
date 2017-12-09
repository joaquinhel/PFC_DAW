<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CREAR PRUEBA-CLIENTE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="../../../js/validaciones.js" type="text/javascript"></script>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <body>  
        <?php
        include_once '../comunes/menu.php';
        ?>
        <div id="contenedor">
            <?php
            include_once '../comunes/cabecera.php';
            include_once '../../../PHP/BD/pruebaClienteBD.php';
            include_once '../../../PHP/BD/clienteBD.php';
            include_once '../../../PHP/BD/pruebaBD.php';

            if (isset($_POST['insertar'])) {
                $row['cliente_idCliente'] = $_POST['cliente_idCliente'];
                $row['prueba_idPrueba'] = $_POST['prueba_idPrueba'];
                $row['fechaPrueba'] = $_POST['fechaPrueba'];
                $row['diagnostico'] = $_POST['diagnostico'];

                global $js; //Variable para controlar si entra o no al js
                $js = 0;
                echo "<noscript>"; //Cuando está desactivado javascript
                $js = 1;
                require_once '../../../PHP/BD/Validaciones.php';
                $validar = Validaciones::controlarEntradaPruebaCliente($row);
                if ($validar) {
                    pruebaClienteBD::insertarPruebaCliente($row);
                }
                echo "</noscript>";
                if ($js == 0) {//Solo va a entrar cuando no haya entrado al bloque anterior (nonscript)
                    pruebaClienteBD::insertarPruebaCliente($row);
                }
            }
            ?>
            <div id='centro'>
                <h2>PROGRAMAR NUEVA PRUEBA PARA CLIENTE</h2>
                <div id="error">
                </div>
                <label>Introduzca los datos del prueba que desea grabar </label>
                <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post" 
                      onsubmit=" return controlarEntradaPruebaCliente()"> 
                    <label for="cliente">*Cliente: </label>
                    <select name="cliente_idCliente" id="cliente" required>  
                        <?php
                        $todos1 = clienteBD::listarTodos();
                        foreach ($todos1 as $id) {
                            echo "<option value=" . $id->getIdCliente() . ">" . $id->getNif() . "</option>";
                        }
                        ?>   
                    </select>
                    <br/>

                    <label for="prueba">*Prueba: </label>
                    <select name="prueba_idPrueba" id='prueba' required>  
                        <?php
                        $todos1 = pruebaBD::listarTodos();
                        foreach ($todos1 as $id) {
                            echo "<option value=" . $id->getIdPrueba() . ">" . $id->getNombrePrueba() . "</option>";
                        }
                        ?>   
                    </select><br/>

                    <label for="fecha">* Fecha: </label>
                    <input type="date" name="fechaPrueba" required/><br/> 

                    <label for="diagnostico">* Diagnostico: </label>
                    <input type="text" name="diagnostico" maxlength='45' required/><br/><br/>

                    <input type="submit" name="insertar" value="Introducir Nuevo"/><br/>
                    <a href="listar.php">Volver al listado de pruebas - clientes </a>&emsp;
                    <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
                </form> 
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

