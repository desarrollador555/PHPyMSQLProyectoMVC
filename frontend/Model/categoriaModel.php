<?php 
    class categoriaModel{
        private $db;

        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index(){
            $statement=$this->db->prepare("SELECT * FROM categoria");
            $statement->execute();
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function view($id){
            $statement=$this->db->prepare("SELECT * FROM categoria where id_categoria = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
            $statement=$statement->fetch();
            return $statement;
        }
    }
?>