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
                <h1>LISTADO DE CATEGORIAS DE CATEGORIAS</h1>
                <div>
                    <input type='submit' value='Crear Nuevo Registro' class='navegacion' id='crear' name='crear' onclick = "location = './crear.php'"/>
                    <?php
                    include_once '../../../PHP/BD/usuarioBD.php';
                    $todos = usuarioBD::listarTodos();
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
                    <br>
                        <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la Intranet</a><br/>
                </div>
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