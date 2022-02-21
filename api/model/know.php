<?php
class Know
{

    public function ver()
    {
        $mysqli = new mysqli("127.0.0.1", "root", "", "apiqa");

        $myArray = array();
        if ($result = $mysqli->query("SELECT a.baseConhecimento, b.nomeDoc, b.TipoDoc, b.descricao, b.conteudo, b.dataCriacao, b.dataAtualizacao FROM tbl_qa_know_cat a, tbl_qa_know_doc b WHERE a.codCatBase = b.codCatBase and a.Habil >=1 and b.Habil >=1 order by a.baseConhecimento, b.TipoDoc, b.Ordem, b.nomeDoc asc")) {


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
