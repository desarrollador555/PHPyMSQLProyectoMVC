<?php
    class capitulosController{
        private $model;
        
        public function __construct()
        {
            require_once "Model/capitulosModel.php";
            $this->model=new capitulosModel();
        }
        public function index(){
            $id=$_GET['id'];
            $capitulos=$this->model->index($id);
            require_once "View/capitulos/capitulos.php";
        }
        public function view(){
            $id=$_GET['id'];
            $alumno=$this->model->view($id);
            require_once "View/capitulos/view.php";
        }
        public function create(){
            $servidores=$this->model->getFKServidor();
            $listaTemporadas=$this->model->getFKTemporadas();
            require_once "View/capitulos/create.php";
        }

    }
?>