<?php
    class estatusController{
        private $model;
        
        public function __construct()
        {
            require_once "Model/estatusModel.php";
            $this->model=new estatusModel();
        }
        public function index(){
            $estatus=$this->model->index();
            require_once "View/estatus/estatus.php";
        }
        public function view(){
            $id=$_GET['id'];
            $alumno=$this->model->view($id);
            require_once "View/estatus/view.php";
        }
    }
?>