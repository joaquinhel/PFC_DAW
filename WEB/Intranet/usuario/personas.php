<?php

if (isset($_GET['id'])) {
    get_persons($_GET['id']);
} else {
    die("Solicitud no válida.");
}

function get_persons($id) {

    //Cambia por los detalles de tu base datos
    $dbserver = "localhost";
    $dbuser = "root";
    $password = "";
    $dbname = "optica";

    $database = new mysqli($dbserver, $dbuser, $password, $dbname);

    if ($database->connect_errno) {
        die("No se pudo conectar a la base de datos");
    }

    $jsondata = array();

    //Sanitize ipnut y preparar query
    if (is_array($id)) {
        $id = array_map('intval', $id);
        $querywhere = "WHERE `idUsuario` IN (" . implode(',', $id) . ")";
    } else {
        $id = intval($id);
        $querywhere = "WHERE `idUsuario` = " . $id;
    }
    /*
      include_once '../../../PHP/BD/usuarioBD.php';
      $result1 = usuarioBD::listarTodos();
     */
    if ($result = $database->query("SELECT * FROM `usuario` " . $querywhere)) {

        if ($result->num_rows > 0) {
            $jsondata["success"] = true;
            $jsondata["data"]["message"] = sprintf("Se han encontrado %d usuarios", $result->num_rows);
            $jsondata["data"]["users"] = array();
            while ($row = $result->fetch_object()) {
                $jsondata["data"]["users"][] = $row;
            }
        } else {
            $jsondata["success"] = false;
            $jsondata["data"] = array(
                'message' => 'No se encontró ningún resultado.'
            );
        }

        $result->close();
    } else {

        $jsondata["success"] = false;
        $jsondata["data"] = array(
            'message' => $database->error
        );
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata, JSON_FORCE_OBJECT);

    $database->close();
}

exit();
