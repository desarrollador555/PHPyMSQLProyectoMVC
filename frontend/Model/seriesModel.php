<?php 
    class seriesModel{
        private $db;
        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index(){
            $statement=$this->db->prepare("SELECT * FROM series");
            $statement->execute();
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function view($id){
            $statement=$this->db->prepare("SELECT * FROM series where id_Serie = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
            $statement=$statement->fetch();
            return $statement;
        }
        public function getFknamecategoria($id){
            $statement=$this->db->prepare("SELECT ce_nombre from categoria where id_categoria =:idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
            $statement=$statement->fetch();
            $statement=$statement['ce_nombre'];
            return $statement;
        }
    }
?>