<?php
    class seriesController{
        private $model;
        private $modelcategoria;
        private $modelcapitulos;
        private $modeltemporadas;
        private $modelservidor;
        private $paginacion;
        public function __construct()
        {

            require_once "Model/servidorModel.php";
            $this->modelservidor=new servidorModel();

            require_once "Model/temporadasModel.php";
            $this->modeltemporadas=new temporadasModel();

            require_once "Model/categoriaModel.php";
            $this->modelcategoria=new categoriaModel();

            require_once "Config/paginacion.php";
            $this->paginacion=new paginacion();

            require_once "Model/seriesModel.php";
            $this->model=new seriesModel();

            require_once "Model/capitulosModel.php";
            $this->modelcapitulos=new capitulosModel();
        }
        public function index(){
            // echo $post=(!empty($_GET['post']))?(int)$_GET['post']:3;
            // echo $paginaA=$this->paginacion->obtenerPagina();//necesarios para paginacion numero actual de pagina
            // echo $inicio=($paginaA>1)?$paginaA*$post-$post:0;

            if(!empty($_GET['categoria'])){
                $categoria=$_GET['categoria'];
                $series=$this->model->index($categoria);
            }else{
                $series=$this->model->index("");
            }

            $categorias=$this->modelcategoria->index();
            
            // $totalRegistros=$this->paginacion->totalRegistros("series");//total de registros
            // echo $totalPaginas=$this->paginacion->numerodepaginas($totalRegistros,$post);
            require_once "View/series/series.php";
            
            // require_once "../Asset/paginacion/paginacion.php";
        }
        public function view(){
            $id=$_GET['id'];
            $temporadas=$this->modeltemporadas->index($id);
            $serie=$this->model->view($id);
            require_once "View/series/view.php";
        }
    }
?>