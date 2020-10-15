<?php
    class temporadasController{
        private $model;
        private $modelcapitulos;
        public function __construct()
        {
            require_once "Model/capitulosModel.php";
            $this->modelcapitulos=new capitulosModel();

            require_once "Model/temporadasModel.php";
            $this->model=new temporadasModel();
        }
        public function index(){
            $temporadas=$this->model->index($_GET['id']);
            require_once "View/temporadas/temporadas.php";
        }
    }
?>