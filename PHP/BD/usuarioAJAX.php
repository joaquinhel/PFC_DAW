
    <?php

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
$result = $database->query("SELECT * FROM `usuario` " . $querywhere);

