<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php include_once "../../crearSesion.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> BORRAR PRUEBA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            ?>
            <div id='centro'>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1> BORRAR UNA PRUEBA </h1>
                    <p class="negrita"> Introduzca el id de la prueba a borrar (puede consultar el listado de más abajo) </p>
                    <label>ID prueba</label>
                    <select name = 'id' id='id'>
                        <?php
                        include_once '../../../PHP/BD/pruebaBD.php';
                        $todos = pruebaBD::listarTodos();
                        echo "<option> Seleccionar..</option>";
                        foreach ($todos as $id) {
                            echo "<option value = " . $id->getIdPrueba() . ">" . $id->getIdPrueba() . "</option>";
                        }
                        ?>
                    </select>
                    <input type='submit' name='enviar' value='Borrar'/>  
                </form>

                <?php
                include_once '../../../PHP/BD/pruebaBD.php';

                if (isset($_POST['enviar'])) {
                    $borrado = pruebaBD::borrarPrueba($_POST['id']);
                    if ($borrado == true) {
                        echo "El registro se ha borrado";
                    } else {
                        echo "<h4>El borrado no ha sido posible ya que esta prueba está ne uso</h4>";
                    }
                }
                echo "<h1>LISTADO DE PRUEBAS DIAGNOSTICAS</h1>";
                echo "<table>";
                echo "<tr><th>idPrueba</th><th>nombrePrueba</th><th>Instrumental</th> <th>Descripcion</th><th>Acciones</th>"
                . "</tr>";
                $todos1 = proveedorBD::listarTodos();
                foreach ($todos1 as $aux) {
                    echo "<tr class='marcar'>"
                    . "<td>" . $aux->getIdPrueba() . "</td> "
                    . "<td>" . $aux->getNombrePrueba() . "</td>"
                    . "<td>" . $aux->getAparatosNecesarios() . "</td>"
                    . "<td>" . $aux->getDescripcion() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPrueba() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>
                <br/> 
                <a href="listar.php">Volver al listado de pruebas</a>&emsp;
                <a href = '../../menuIntranet.php'>Volver al indice INTRANET</a>
                <br/><br/> 
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
