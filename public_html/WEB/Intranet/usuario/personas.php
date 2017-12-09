<?php

if (isset($_GET['id'])) {
    get_persons($_GET['id']);
} else {
    die("Solicitud no válida.");
}

function get_persons($id) {

    require_once '../../../PHP/BD/usuarioAJAX.php';
    if ($result) {
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
