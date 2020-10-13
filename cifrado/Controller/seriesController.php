<?php
    class seriesController{
        private $model;
        private $modelcategoria;
        private $modeltemporadas;
        public function __construct()
        {
            require_once "Model/temporadasModel.php";
            $this->modeltemporadas=new temporadasModel();

            require_once "Model/categoriaModel.php";
            $this->modelcategoria=new categoriaModel();

            require_once "Model/seriesModel.php";
            $this->model=new seriesModel();
        }
        public function index(){
            $series=$this->model->index();
            
            require_once "View/series/series.php";
        }
        public function view(){

            $id=$_GET['id'];
            $temporadas=$this->modeltemporadas->index($id);

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
                $carpeta="/Asset/imagenes/";
                if(isset($_GET['s'])){

                    if(!$_FILES['imagen']['tmp_name']){//si no hay imagen
                        $nombreimagen="";
                        $dir_imagen="";

                        $check=$this->model->create($nombre,$descripcion,$nombreimagen,$dir_imagen,$categoria);
                        ?>
                        <script type="text/javascript">
                            window.location.replace("<?= inicio?>index.php?c=series&a=index");
                        </script>
                        <?php
                        die();
                    }else{
                        $imagen_temporal=$_FILES['imagen']['tmp_name'];
                        $nombreimagen=$_FILES['imagen']['name'];
                        $dirimagen=$carpeta.$nombreimagen;
                        $dir_destino_imagen_local=carpetafisica.$carpeta.$nombreimagen;
                        
                        $check=$this->model->create($nombre,$descripcion,$nombreimagen,$dirimagen,$categoria);
                            
                            if($check==true){
                                move_uploaded_file($imagen_temporal,$dir_destino_imagen_local);
                                ?>
                                    <script type="text/javascript">
                                        window.location.replace("<?= inicio?>index.php?c=series&a=index");
                                    </script>
                                <?php 
                                die();
                            }
                    }        
                }
                if(isset($_GET['m'])){

                    $id=$_POST['id'];
                    
                   if(!$_FILES['imagen']['tmp_name']){
                        $nombreimagen=$_POST['imagensubido'];
                        $dir_destino_imagen=$carpeta.$nombreimagen;
                        
                        $check=$this->model->update($id,$nombre,$descripcion,$nombreimagen,$dir_destino_imagen,$categoria);
                        ?>
                            <script type="text/javascript">
                                window.location.replace("<?= inicio?>index.php?c=series&a=index");
                            </script>
                        <?php
                        die();
                    }else{
                        $imagen_temporal=$_FILES['imagen']['tmp_name'];
                        $nombreimagen=$_FILES['imagen']['name'];

                        $dir_destino_imagen_local=carpetafisica.$carpeta.$nombreimagen;
                        $dir_imagen=$carpeta.$nombreimagen;

                        $check=$this->model->update($id,$nombre,$descripcion,$nombreimagen,$dir_imagen,$categoria);
                        if($check==true){
                            move_uploaded_file($imagen_temporal,$dir_destino_imagen_local);
                        }
                    }        
                    ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=series&a=index");
                    </script>
                    <?php
                            die();
                }
            }else{
                ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=series&a=index");
                    </script>
                    <?php
                            die();
            }
        }
        public function modificar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $serie=$this->model->view($id);//traer los datos y mostrarlos en el formulario de edicion
                $categorias=$this->modelcategoria->index();//traer el listado
                if(!$serie){
                    ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=series&a=index");
                    </script>
                    <?php
                            die();
                }else{
                    require_once "View/series/edit.php";
                }
            }else{
                ?>
                    
                    <script type="text/javascript">
                        window.location.replace("<?=inicio?>index.php?c=series&a=index");
                    </script>
                    <?php
                            die();
            }
        }
        public function eliminar(){
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                ?>
                    <script type="text/javascript">
                        window.location.replace("<?= inicio?>index.php?c=series&a=index");
                    </script>
                <?php
            }else{
                ?>
                    <script type="text/javascript">
                        window.location.replace("<?= inicio?>index.php?c=series&a=index");
                    </script>
                <?php
            }
        }
    }
?>