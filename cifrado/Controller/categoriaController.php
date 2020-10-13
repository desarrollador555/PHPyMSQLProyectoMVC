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