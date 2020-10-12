<?php 
    class servidorModel{
        private $db;

        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index(){
            $statement=$this->db->prepare("SELECT * FROM servidor");
            $statement->execute();
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function view($id){
            $statement=$this->db->prepare("SELECT * FROM servidor where id_servidor = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
            $statement=$statement->fetch();
            return $statement;
        }
        public function getimage($id){
            $statement=$this->db->prepare("SELECT se_dir_imagen FROM servidor where id_servidor=:id_servidor");
            $statement->execute(
                array(
                    ":id_servidor"=>$id
                )
            );
            $statement=$statement->fetch();
            return $statement['se_dir_imagen'];
        }
    }
?>