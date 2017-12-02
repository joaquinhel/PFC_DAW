<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>INSERTAR PROVEEDOR</title>
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
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <p> INTRODUZCA EL IDENTIFICADOR DEL PROVEEDOR A BORRAR </p>
                    <label>ID proveedor</label><input type='text' name='id' maxlength='4'/><br/>
                    <input type='submit' name='enviar' value='Borrar'/> <br/><br/>
                </form>

                <?php
                include_once '../../../PHP/BD/proveedorBD.php';
                if (isset($_POST['enviar'])) {
                   $borrado =  proveedorBD::borrarProveedor($_POST['id']);
                   if ($borrado == true) {
                        echo "El registro se ha borrado";
                    } else {
                        echo "<h4>El borrado no ha sido posible ya que este proveedor está en uso</h4>";
                    }
                }
                echo "<h1>LISTADO DE PROVEEDORES</h1 >";
                $todos = proveedorBD::listarTodos();
                echo "<table>";
                echo "<tr><th>ID</th><th>Dirección</th><th>Nombre Empresa</th><th>Persona Contacto</th>"
                . " <th>CIF</th><th>Email</th><th>Teléfono</th><th>Acciones</th></tr>";

                foreach ($todos as $aux) {
                    echo "<tr><td>" . $aux->getIdProveedor() . "</td> "
                    . "<td>" . $aux->getDireccion() . "</td>"
                    . "<td>" . $aux->getNombreEmpresa() . "</td>"
                    . "<td>" . $aux->getPersonaContacto() . "</td>"
                    . "<td>" . $aux->getCif() . "</td>"
                    . "<td>" . $aux->getEmail() . "</td>"
                    . "<td>" . $aux->getTelefono() . "</td>"
                    . "<td> <a href='actualizar.php?id=" . $aux->getIdProveedor() . "'>Editar</a>
                       <a href='borrar.php?id=" . $aux->getIdProveedor() . "'>Borrar</a></tr>";
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
