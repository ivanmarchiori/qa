<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>