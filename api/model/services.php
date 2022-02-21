<?php
class Services
{

    public function ver()
    {
        $mysqli = new mysqli("127.0.0.1", "root", "", "apiqa");

        $myArray = array();
        if ($result = $mysqli->query("SELECT * FROM tbl_qa_services Where Habil >=1")) {

            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
            }
            $ret = [
                "status" => (count($myArray) > 0) ? 200 : 204,
                "result" => (count($myArray) > 0) ? "Resultados Localizados" : "Nenhum Resultado Localizado",
                "data" => $myArray,
            ];
            http_response_code((count($myArray) > 0) ? 200 : 204);
        } else {
            $ret = [
                "status" => 404,
                "result" => "Erro ao conectar a tabela",
                "data" => [],
            ];
            http_response_code(404);
        }
        return $ret;
    }
}
