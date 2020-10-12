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
        public function create($nombre,$servidor,$url,$urlencriptada,$temporada){
            $statement=$this->db->prepare("INSERT INTO capitulos VALUES(null,:c_nombre,:c_fk_Servidor,:c_url,:c_urlEncriptada,:c_fk_id_temporada)");
            $statement->execute(
                array(
                    ":c_nombre"=>$nombre,
                    ":c_fk_Servidor"=>$servidor,
                    ":c_url"=>$url,
                    ":c_urlEncriptada"=>$urlencriptada,
                    ":c_fk_id_temporada"=>$temporada
                )
            );
            return true;
        }
        public function update($id,$nombre,$servidor,$url,$urlencriptada,
        $temporada){
            $statement=$this->db->prepare("UPDATE capitulos SET c_nombre=:c_nombre,c_fk_Servidor =:c_fk_Servidor, c_url=:c_url, c_urlEncriptada=:c_urlEncriptada, c_fk_id_temporada =:c_fk_id_temporada WHERE id_capitulo  = :id_capitulo ");
            $statement->execute(
                array(
                    ":id_capitulo"=>$id,
                    ":c_nombre"=>$nombre,
                    ":c_fk_Servidor"=>$servidor,
                    ":c_url"=>$url,
                    ":c_urlEncriptada"=>$urlencriptada,
                    ":c_fk_id_temporada"=>$temporada
                )
            );
            return true;
        }
        public function delete($id){
            $statement=$this->db->prepare("DELETE FROM capitulos where id_capitulo = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
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