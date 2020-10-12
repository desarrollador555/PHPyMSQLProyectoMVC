<?php 
    class capitulosModel{
        private $db;
        private $temporada;
        private $servidor;
        public function __construct()
        {
            require_once "Model/servidorModel.php";
            $this->servidor=new servidorModel();

            require_once "Model/temporadasModel.php";
            $this->temporada=new temporadasModel();
            
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index($id){
            $statement=$this->db->prepare("SELECT * FROM capitulos WHERE c_fk_id_temporada=:c_fk_id_temporada ");
            $statement->execute(
                array(
                    ":c_fk_id_temporada"=>$id
                )
            );
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function view($id){
            $statement=$this->db->prepare("SELECT * FROM capitulos where id_capitulo = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
            $statement=$statement->fetch();
            return $statement;
        }
        public function getFKTemporadas(){
            $statement=$this->db->prepare("SELECT * FROM temporadas");
            $statement->execute();
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function getFKServidor(){
            $statement=$this->db->prepare("SELECT * FROM servidor");
            $statement->execute();
            $statement=$statement->fetchAll();
            return $statement;
        }
    }
?>