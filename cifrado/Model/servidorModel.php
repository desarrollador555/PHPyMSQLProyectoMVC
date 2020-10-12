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
        public function create($nombre,$imagen,$dir_imagen){
            $statement=$this->db->prepare("INSERT INTO servidor VALUES(null, :se_nombre, :se_imagen, :se_dir_imagen)");
            $statement->execute(
                array(
                    ":se_nombre"=>$nombre,
                    ":se_imagen"=>$imagen,
                    ":se_dir_imagen"=>$dir_imagen
                )
            );
            return true;
        }
        public function update($id,$nombre,$imagen,$dir_imagen){
            $statement=$this->db->prepare("UPDATE servidor SET se_nombre = :se_nombre, se_imagen = :se_imagen, se_dir_imagen = :se_dir_imagen WHERE id_servidor = :id_servidor");
            $statement->execute(
                array(
                    ":se_nombre"=>$nombre,
                    ":se_imagen"=>$imagen,
                    ":se_dir_imagen"=>$dir_imagen,
                    ":id_servidor"=>$id
                )
            );
            return true;
        }
        public function delete($id){
            $statement=$this->db->prepare("DELETE FROM servidor where id_servidor = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
        }
    }
?>