<?php
    class seriesController{
        private $model;
        private $modelcategoria;
        private $modelcapitulos;
        private $modeltemporadas;
        private $modelservidor;
        public function __construct()
        {

            require_once "Model/servidorModel.php";
            $this->modelservidor=new servidorModel();

            require_once "Model/temporadasModel.php";
            $this->modeltemporadas=new temporadasModel();

            require_once "Model/categoriaModel.php";
            $this->modelcategoria=new categoriaModel();

            require_once "Model/seriesModel.php";
            $this->model=new seriesModel();

            require_once "Model/capitulosModel.php";
            $this->modelcapitulos=new capitulosModel();
        }
        public function index(){
            $series=$this->model->index();
            
            require_once "View/series/series.php";
        }
        public function view(){

            $id=$_GET['id'];
            $temporadas=$this->modeltemporadas->index($id);

            // $capitulos = ;
            
            // echo $this->modelservidor->getimage(1);
            
            
            $serie=$this->model->view($id);
            require_once "View/series/view.php";
        }
        public function create(){
            $categorias=$this->modelcategoria->index();
            require_once "View/series/create.php";
        }
        public function preparar(){
            if(!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['categoria'])){
                
                $nombre=$_POST['nombre'];
                $descripcion=$_POST['descripcion'];
                $categoria=$_POST['categoria'];

                $carpeta=carpeta."Asset/imagenes/";

                if(isset($_GET['s'])){
                    if(!$_FILES['imagen']['tmp_name']){
                        $nombreimagen="";
                        $dir_imagen="";

                        $check=$this->model->create($nombre,$descripcion,$nombreimagen,$dir_imagen,$categoria);
                        header("Location:index.php?c=series&a=index");
                    }else{
                        $imagen_temporal=$_FILES['imagen']['tmp_name'];
                        $nombreimagen=$_FILES['imagen']['name'];
                        $dir_destino_imagen_local=$carpeta.$nombreimagen;
                        $dir_imagen="Asset/imagenes/".$nombreimagen;
                        
                        $check=$this->model->create($nombre,$descripcion,$nombreimagen,$dir_imagen,$categoria);
                            
                            if($check==true){
                                move_uploaded_file($imagen_temporal,$dir_destino_imagen_local);
                                header("Location:index.php?c=series&a=index");
                            }
                    }        
                }
                if(isset($_GET['m'])){

                    $id=$_POST['id'];
                    
                   if(!$_FILES['imagen']['tmp_name']){
                        $nombreimagen=$_POST['imagensubido'];
                        $dir_destino_imagen="Asset/imagenes/".$nombreimagen;
                        
                        $check=$this->model->update($id,$nombre,$descripcion,$nombreimagen,$dir_destino_imagen,$categoria);
                        header("Location:index.php?c=series&a=index"); 
                    }else{
                        $imagen_temporal=$_FILES['imagen']['tmp_name'];
                        $nombreimagen=$_FILES['imagen']['name'];

                        $dir_destino_imagen_local=$carpeta.$nombreimagen;
                        $dir_imagen="Asset/imagenes/".$nombreimagen;

                        $check=$this->model->update($id,$nombre,$descripcion,$nombreimagen,$dir_imagen,$categoria);
                        if($check==true){
                            move_uploaded_file($imagen_temporal,$dir_destino_imagen_local);
                        }
                    }        
                            header("Location:index.php?c=series&a=index"); 
                }
            }else{
                header("Location:index.php?c=series&a=create");
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $serie=$this->model->view($id);
                $categorias=$this->modelcategoria->index();
                if(!$serie){
                    header("Location:index.php?c=series&a=index");
                }else{
                    require_once "View/series/edit.php";
                }
            }else{
                header("Location:index.php?c=series&a=index");
            }
        }
        public function eliminar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                header("Location:index.php?c=series&a=index");
            }else{
                header("Location:index.php?c=series&a=index");
            }
        }
    }
?>