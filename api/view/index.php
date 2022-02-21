<?php

class View{

public function load($model, $acao, $data = null)
{
    include("$model/$acao.php");
}

}

?>