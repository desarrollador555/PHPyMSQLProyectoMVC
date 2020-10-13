<?php
    class capitulosController{
        private $model;
        
        public function __construct()
        {
            require_once "Model/capitulosModel.php";
            $this->model=new capitulosModel();
        }
        public function index(){
            $id=$_GET['id'];
            $capitulos=$this->model->index($id);
            require_once "View/capitulos/capitulos.php";
        }
        public function view(){
            $id=$_GET['id'];
            $alumno=$this->model->view($id);
            require_once "View/capitulos/view.php";
        }
        public function create(){
            $servidores=$this->model->getFKServidor();
            $listaTemporadas=$this->model->getFKTemporadas();
            require_once "View/capitulos/create.php";
        }
        public function preparar(){
            if(!empty($_POST['nombre']) && !empty($_POST['servidor']) && !empty($_POST['url']) && !empty($_POST['urlencriptada']) && !empty($_POST['temporada'])){
                $nombre=$_POST['nombre'];
                $servidor=$_POST['servidor'];
                $url=$_POST['url'];
                $urlencriptada=$_POST['urlencriptada'];
                $temporada=$_POST['temporada'];
                
                if(isset($_GET['s'])){
                    $check=$this->model->create($nombre,$servidor,$url,$urlencriptada,
                    $temporada);

                    if($check==true){
                ?>
                    <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=temporadas&a=view&id=<?=$temporada?>");</script>
                <?php
                        die();
                    }else{
                ?>
                    <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=capitulos&a=create&id=<?=$temporada?>");</script>
                <?php
                        die();
                    }
                }
                if(isset($_GET['m'])){
                    $id=$_POST['id'];
                    
                    $check=$this->model->update($id,$nombre,$servidor,$url,$urlencriptada,
                    $temporada);
                        if($check==true){
                    ?>
                            <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=temporadas&a=view&id=<?=$temporada?>");</script>
                    <?php
                            die();
                        }else{
                    ?>
                            <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=capitulos&a=create");</script>
                    <?php
                            die();
                        }
                }
                }else{
                    ?>
                            <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=capitulos&a=create");</script>
                    <?php
                            die();
            }
        }
        public function modificar(){            
            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $capitulos=$this->model->view($id);
                $servidores=$this->model->getFKServidor();
                $listaTemporadas=$this->model->getFKTemporadas();
                if(!$capitulos){
                    ?>
                    <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=capitulos&a=index")</script>
                    <?php
                }else{
                    require_once "View/capitulos/edit.php";
                }
            }else{
                ?>
                    <script type="text/javascript">window.location.replace("<?=inicio?>index.php?c=capitulos&a=index")</script>
                <?php
            }
        }
        public function eliminar(){
            $temporada=$_GET['temporada'];

            if(!empty($_GET['id'])){
                $id=$_GET['id'];
                $this->model->delete($id);
                ?>
                    <script type="text/javascript">window.location.replace("<?= inicio?>index.php?c=temporadas&a=view&id=<?=$temporada?>")</script>
                <?php
                die();
            }else{
                ?>
                    <script type="text/javascript">window.location.replace("<?= inicio?>index.php?c=temporadas&a=view&id=<?=$temporada?>")</script>
                <?php
                die();
            }
        }
    }
?>