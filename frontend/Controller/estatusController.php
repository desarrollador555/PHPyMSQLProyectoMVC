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
        public function create(){
            require_once "View/estatus/create.php";
        }
        public function preparar(){
            if(!empty($_POST['nombre'])){
                $nombre=$_POST['nombre'];
                $this->model->create($nombre);
                header("Location:index.php?c=estatus&a=index");
            }else{
                header("Location:index.php?c=estatus&a=create");
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $alumno=$this->model->view($id);
                if(!$alumno){
                    header("Location:index.php?c=estatus&a=index");
                }else{
                    require_once "View/estatus/edit.php";
                }
            }else{
                header("Location:index.php?c=estatus&a=index");
            }
        }
        public function actualizar(){
            if(!empty($_POST['id']) && !empty($_POST['nombre'])){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $check=$this->model->update($id,$nombre);
                if($check==true){
                    header("Location:index.php?c=estatus&a=index");
                }
            }
        }
        public function eliminar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                header("Location:index.php?c=estatus&a=index");
            }else{
                header("Location:index.php?c=estatus&a=index");
            }
        }
    }
?>