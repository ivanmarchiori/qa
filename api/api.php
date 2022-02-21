<?php
header("Access-Control-Allow-Origin: *");
$mysqli = new mysqli("127.0.0.1", "root", "", "apiqa");

$myArray = array();
if ($result = $mysqli->query("SELECT * FROM tbl_qa_tests")) {

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    $ret = [
        "status" => 200,
        "result" => "Resultados Localizados",
        "data" => $myArray,
    ];
} else {
    $ret = [
        "status" => 404,
        "result" => "Nenhum dado encontrado",
        "data" => [],
    ];
}

$result->close();
$mysqli->close();


header("Content-type: application/json");
echo json_encode($ret, JSON_UNESCAPED_UNICODE);
