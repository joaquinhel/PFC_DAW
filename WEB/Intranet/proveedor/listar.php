<!DOCTYPE html>
<?php
include_once "../../crearSesion.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LISTAR PROVEEDOR</title>
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
            ?>
            <div id='centro'>
                <h1>LISTADO DE PROVEEDORES</h1><br/>
                <input type='submit' class='navegacion' value='Crear Nuevo Registro' id='crear' name='crear' onclick = "location = './crear.php'"/>
                <div>
                    <?php
                    include_once '../../../PHP/BD/proveedorBD.php';
                    $todos = proveedorBD::listarTodos();
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Dirección</th><th>Nombre Empresa</th><th>Persona Contacto</th>"
                    . " <th>CIF</th><th>Email</th><th>Teléfono</th><th>Acciones</th>"
                            . "</tr>";

                    foreach ($todos as $aux) {
                        echo "<tr class='marcar'><td>" . $aux->getIdProveedor() . "</td> "
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
                    <br>
                        <a id='volver' class='navegacion' href="../../menuIntranet.php">Volver al Menú de la INTRANET</a><br/>
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