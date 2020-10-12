<?php 
    class estatusModel{
        private $db;

        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index(){
            $statement=$this->db->prepare("SELECT * FROM estatus");
            $statement->execute();
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function view($id){
            $statement=$this->db->prepare("SELECT * FROM estatus where id_estatus = :idsa");
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