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
        public function view(){
            $id=$_GET['id'];
            $temporadas=$this->model->view($id);
            $capitulos=$this->modelcapitulos->index($id);
            require_once "View/temporadas/view.php";
        }
        public function create(){
            $series=$this->model->getFKSeries();
            $estatus=$this->model->getFKEstatus();
            require_once "View/temporadas/create.php";
        }
        public function preparar(){
            if(!empty($_POST['nombre']) && !empty($_POST['serie']) && !empty($_POST['estatus'])){
                
                $nombre=$_POST['nombre'];
                $serie=$_POST['serie'];
                $estatus=$_POST['estatus'];
                
                if(isset($_GET['s'])){
                    $check=$this->model->create($nombre,$serie,$estatus);
                        if($check==true){
                            header("Location:index.php?c=series&a=view&id=$serie");           
                        }else{
                            header("Location:index.php?c=temporadas&a=create&id=$serie");   
                        }
                }
                if(isset($_GET['m'])){
                    $id=$_POST['id'];
                    $nombre=$_POST['nombre'];
                    $serie=$_POST['serie'];
                    $estatus=$_POST['estatus'];
                    
                    $check=$this->model->update($id,$nombre,$serie,$estatus);
                        if($check==true){
                            header("Location:index.php?c=series&a=view&id=$serie");          
                        }else{
                            header("Location:index.php?c=temporadas&a=modificar&id=$id");   
                        }
                }
            }else{
                header("Location:index.php?c=temporadas&a=create");
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $series=$this->model->getFKSeries();
                $estatus=$this->model->getFKEstatus();
                $temporadas=$this->model->view($id);
                // print_r($temporadas);
                if(!$temporadas){
                    header("Location:index.php?c=series&a=view&id=$id");
                }else{
                    require_once "View/temporadas/edit.php";
                }
            }else{
                header("Location:index.php?c=series&a=view&id=$id");
            }
        }
        public function eliminar(){
            $idserie=$_GET['serie'];
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                header("Location:index.php?c=series&a=view&id=$idserie");
            }else{
                header("Location:index.php?c=series&a=view&id=$idserie");
            }
        }
    }
?>