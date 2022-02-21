<?php
class Home
{
    public function ver()
    {
        $ret = [
            "status" => 200,
            "result" => "Seja bem vindo",
            "data" => [],
        ];
        return $ret;
    }
}
