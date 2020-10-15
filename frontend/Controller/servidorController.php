<?php
    class servidorController{
        private $model;
        
        public function __construct()
        {
            require_once "Model/servidorModel.php";
            $this->model=new servidorModel();
        }
        public function index(){
            $servidor=$this->model->index();
            require_once "View/servidor/servidor.php";
        }
        public function view(){
            $id=$_GET['id'];
            $servidor=$this->model->view($id);
            require_once "View/servidor/view.php";
        }
    }
?>