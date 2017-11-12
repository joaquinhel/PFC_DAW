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
                <h1>LISTADO DE CATEGORIAS DE CLIENTES</h1>

                    <?php
                    include_once '../../../PHP/BD/clienteBD.php';
                    $todos = clienteBD::listarTodos();
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th> <th>Dirección</th> <th> Email </th>"
                    . "<th>Telefono</th> <th>NIF</th><th>Acciones</th></tr>";

                    foreach ($todos as $aux) {
                        echo "<tr><td>" . $aux->getIdCliente() . "</td> <td>" . $aux->getNombreCliente() . "</td>"
                        . "<td>" . $aux->getApellidos() . "</td><td>" . $aux->getDireccion() . "</td>"
                        . "<td>" . $aux->getEmail() . "</td>"
                        . "<td>" . $aux->getTelefono() . "</td><td>" . $aux->getNif() . "</td>"
                        . "<td> <a href='actualizar.php?id=" . $aux->getIdCliente() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdCliente() . "'>Borrar</a></tr>";
                    }
                    echo "</table>";

                    if (isset($_POST['enviar'])) {
                        clienteBD::borrarCliente($_POST['id']);
                        echo "El registro se ha borrado";
                    }
                    ?>      

                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                        <p> INTRODUZCA EL IDENTIFICADOR DEL CLIENTE A BORRAR </p>
                        <label>ID categoria</label><input type='text' name='id'/><br/>
                        <input type='submit' name='enviar' maxlength='40' value='Borrar'/> <br/><br/>
                        <a href="listar.php">Volver al listado de Clientes</a>&emsp;
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
