<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php include_once "../../crearSesion.php"; ?>

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
            <div id='centro'>
                <h1>LISTADO DE PRUEBAS DIAGNOSTICAS</h1>

                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <p> INTRODUZCA EL IDENTIFICADOR DE LA PRUEBA A BORRAR </p>
                    <label>ID categoria</label><input type='text' name='id'/><br/>
                    <input type='submit' name='enviar' value='Borrar' maxlength='4'/> <br/><br/>
                </form>

                <?php
                include_once '../../../PHP/BD/pruebaBD.php';

                if (isset($_POST['enviar'])) {
                    pruebaBD::borrarPrueba($_POST['id']);
                    echo "El registro se ha borrado";
                }
                $todos = pruebaBD::listarTodos();
                echo "<table>";
                echo "<tr><th>idPrueba</th><th>nombrePrueba</th><th>Instrumental</th> <th>Descripcion</th><th>Acciones</th>"
                . "</tr>";

                foreach ($todos as $aux) {
                    echo "<tr>"
                    . "<td>" . $aux->getIdPrueba() . "</td> "
                    . "<td>" . $aux->getNombrePrueba() . "</td>"
                    . "<td>" . $aux->getAparatosNecesarios() . "</td>"
                    . "<td>" . $aux->getDescripcion() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdPrueba() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdPrueba() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>
                <br/><br/> 
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
