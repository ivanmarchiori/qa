<?php
class Controller
{
    private $view;
    private $model;

    public function __construct()
    {
        $moduloExterno = isset($_GET['metodo'])?$_GET['metodo']:'home';
        $acaoExterno = isset($_GET['action'])?$_GET['action']:'ver';

        $this->view = new View;
        $this->model = new $moduloExterno;
        $data = $this->model->$acaoExterno();
        $this->view->load($moduloExterno, $acaoExterno, $data);
    }
}
