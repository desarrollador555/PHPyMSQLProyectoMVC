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
        public function create(){
            require_once "View/servidor/create.php";
        }
        public function preparar(){
            if(!empty($_POST['nombre'])){
                $nombre=$_POST['nombre'];
                $carpeta=carpeta."Asset/imagenes/";
                

                if(isset($_GET['s'])){
                    if(!empty($_FILES['imagen']['tmp_name'])){//si se cargo una imagen
                        $imagen=$_FILES['imagen']['name'];
                        $dir_tempora=$_FILES['imagen']['tmp_name'];
                        $imagenlocal=$carpeta.$imagen;
                        $subirImagen="Asset/imagenes/".$imagen;
                        $check=$this->model->create($nombre,$imagen,$subirImagen);
                            if($check==true){
                                move_uploaded_file($dir_tempora,$imagenlocal);
                                header("Location:index.php?c=servidor&a=index");
                            }
                    }else{
                        $check=$this->model->create($nombre,null,null);
                        header("Location:index.php?c=servidor&a=index");
                    }
                }

                if(isset($_GET['m'])){
                    $id=$_POST['id'];
                    if(!empty($_FILES['imagen']['tmp_name'])){
                        $imagen=$_FILES['imagen']['name'];
                        $dir_tempora=$_FILES['imagen']['tmp_name'];
                        $imagenlocal=$carpeta.$imagen;
                        $subirImagen="Asset/imagenes/".$imagen;

                        $check=$this->model->update($id,$nombre,$imagen,$subirImagen);
                            if($check==true){
                                move_uploaded_file($dir_tempora,$imagenlocal);
                                header("Location:index.php?c=servidor&a=index");
                            }
                    }else{
                        $imagen=$_POST['imgsubida'];
                        $subirImagen=$_POST['dirimagen'];
                        $check=$this->model->update($id,$nombre,$imagen,$subirImagen);
                        if($check==true){
                            header("Location:index.php?c=servidor&a=index");
                        }
                    }
                }
            }else{
                if(isset($_GET['s'])){
                    header("Location:index.php?c=servidor&a=create");
                }
                if(isset($_GET['m'])){  
                    $id=$_GET['id'];
                    header("Location:index.php?c=servidor&a=edit&id=$id");
                }
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=(int)$_GET['id'];
                $servidor=$this->model->view($id);
                if(!$servidor){
                    header("Location:index.php?c=servidor&a=index");
                }else{
                    require_once "View/servidor/edit.php";
                }
            }else{
                header("Location:index.php?c=servidor&a=index");
            }
        }
        public function eliminar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                header("Location:index.php?c=servidor&a=index");
            }else{
                header("Location:index.php?c=servidor&a=index");
            }
        }
    }
?>