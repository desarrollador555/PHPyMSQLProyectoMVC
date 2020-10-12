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
        public function create($nombre){
            $statement=$this->db->prepare("INSERT INTO categoria VALUES(null,:nm)");
            $statement->execute(
                array(
                    ":nm"=>$nombre
                )
            );
            return true;
        }
        public function update($id,$nombre){
            $statement=$this->db->prepare("UPDATE categoria SET ce_nombre= :nm WHERE id_categoria = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id,
                    ":nm"=>$nombre
                )
            );
            return true;
        }
        public function delete($id){
            $statement=$this->db->prepare("DELETE FROM categoria where id_categoria = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
        }
    }
?>