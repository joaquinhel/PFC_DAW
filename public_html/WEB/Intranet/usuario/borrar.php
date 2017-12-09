<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>BORRAR USUARIO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="../../../CSS/tablas.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/boton.css" rel="stylesheet" type="text/css"/>
        <link href="../../../CSS/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="../../../imagenes/iconos/centroOptico.png" />
    </head>
    <body>  
        <div id="contenedor">
            <?php
            include_once '../comunes/menu.php';
            include_once '../comunes/cabecera.php';
            include_once '../../../PHP/BD/usuarioBD.php';

            $todos = usuarioBD::listarTodos();
            ?>
            <div class='centro'>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1> BORRAR UN USUARIO</h1>
                    <p class="negrita"> Introduzca el id de la categoria a borrar (puede consultar el listado de más abajo) </p>
                    <label>ID usuario</label>
                    <select name = 'id' id='id'>
                        <?php
                        echo "<option> Seleccionar..</option>";
                        foreach ($todos as $id) {
                            echo "<option value = " . $id->getIdUsuario() . ">" . $id->getIdUsuario() . "</option>";
                        }
                        ?>
                    </select> <br/>              
                    <input type='submit' name='enviar' value='Borrar'/> 
                </form>

                <?php
                if (isset($_POST['enviar'])) {
                    $borrado = usuarioBD::borrarUsuario($_POST['id']);
                    echo "<h4>El registro se ha borrado</h4>";
                }
               
                echo " <br/> <h1>LISTADO DE USUARIOS</h1><br/>";
                echo "<table>";
                echo "<tr><th>ID</th><th>Login</th><th>Pass</th><th>fecha_alta</th> "
                . "<th>Nombre</th><th>Estado</th> <th>Acciones</th></tr>";

                foreach ($todos as $aux) {
                    echo "<tr><td>" . $aux->getIdUsuario() . "</td>"
                    . "<td>" . $aux->getLogin() . "</td>"
                    . "<td>" . $aux->getPass() . "</td>"
                    . "<td>" . $aux->getFecha_alta() . "</td>"
                    . "<td>" . $aux->getNombre() . "</td>"
                    . "<td>" . $aux->getEstado() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdUsuario() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdUsuario() . "'>Borrar</a></tr>";
                }
                echo "</table>";
                ?>
                <br/><br/> 
                <a href="listar.php">Volver al listado de proveedores</a>&emsp;
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
