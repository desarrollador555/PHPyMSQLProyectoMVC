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
        public function create(){
            require_once "View/categoria/create.php";
        }
        public function preparar(){
            if(!empty($_POST['nombre'])){
                $nombre=$_POST['nombre'];
                $this->model->create($nombre);
                header("Location:index.php?c=categoria&a=index");
            }else{
                header("Location:index.php?c=categoria&a=create");
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $alumno=$this->model->view($id);
                if(!$alumno){
                    header("Location:index.php?c=categoria&a=index");
                }else{
                    require_once "View/categoria/edit.php";
                }
            }else{
                header("Location:index.php?c=categoria&a=index");
            }
        }
        public function actualizar(){
            if(!empty($_POST['id']) && !empty($_POST['nombre'])){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $check=$this->model->update($id,$nombre);
                if($check==true){
                    header("Location:index.php?c=categoria&a=index");
                }
            }
        }
        public function eliminar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                header("Location:index.php?c=categoria&a=index");
            }else{
                header("Location:index.php?c=categoria&a=index");
            }
        }
    }
?>