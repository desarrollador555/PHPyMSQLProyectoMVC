<?php
    class categoriaController{
        private $model;
        private $paginacion;
        public function __construct()
        {
            require_once "Model/categoriaModel.php";
            $this->model=new categoriaModel();
            
            require_once "Config/paginacion.php";
            $this->paginacion=new paginacion();
        }
        public function index(){

            $post=(!empty($_GET['post']))?(int)$_GET['post']:4;
            
            $paginaA=$this->paginacion->obtenerPagina();//necesarios para paginacion numero actual de pagina

            $inicio= ($paginaA>1) ? ($paginaA * $post) - $post:0;

            $categorias=$this->model->index($inicio,$post);
            
            $totalRegistros=$this->paginacion->totalRegistros("categoria");//total de registros
            $totalPaginas=$this->paginacion->numerodepaginas($totalRegistros,$post);
            require_once "View/categoria/categoria.php";
            require_once "../Asset/paginacion/paginacion.php";
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
                ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=categoria&a=index");
                    </script>
                    <?php
                            die();
            }else{
                ?>
                    <script type="text/javascript">window.location.replace("<?= inicio?>c=categoria&a=create")</script>
                <?php
                die();
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $alumno=$this->model->view($id);
                if(!$alumno){
                    ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=categoria&a=index");
                    </script>
                    <?php
                            die();
                }else{
                    require_once "View/categoria/edit.php";
                }
            }else{
                ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=categoria&a=index");
                    </script>
                    <?php
                            die();
            }
        }
        public function actualizar(){
            if(!empty($_POST['id']) && !empty($_POST['nombre'])){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $check=$this->model->update($id,$nombre);
                if($check==true){
                    ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=categoria&a=index");
                    </script>
                    <?php
                            die();
                }
            }
        }
        public function eliminar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=categoria&a=index");
                    </script>
                    <?php
                            die();
            }else{
                ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=categoria&a=index");
                    </script>
                    <?php
                            die();
            }
        }
    }
?>