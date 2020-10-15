<?php
    class categoriaController{
        private $model;
        
        public function __construct()
        {
            require_once "Model/categoriaModel.php";
            $this->model=new categoriaModel();
        }
        public function index(){
            $categorias=$this->model->index();
            require_once "View/categoria/categoria.php";
        }
        public function view(){
            $id=$_GET['id'];
            $categoria=$this->model->view($id);
            require_once "View/categoria/view.php";
        }
    }
?>