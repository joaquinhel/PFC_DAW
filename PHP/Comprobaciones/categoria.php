<?php

include ' ../BD/categoria.php';

if (isset($_POST["crear"])) {
    $categoriaIns = array();
    $categoriaIns[0] = $_POST["idCategoria"];
    $categoriaIns[1] = $_POST["nombreCategoria"];
    insertarCategoria($productoIns);
    echo "Se han insertado los datos";
} else {
    echo "EL CAMPO CÓDIGO NO PUEDE ESTAR VACIO";
}


