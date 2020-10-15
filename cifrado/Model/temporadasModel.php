<?php 
    class temporadasModel{
        private $db;
        private $series;
        private $estatus;
        public function __construct()
        {
            require_once "Model/seriesModel.php";
            $this->series=new seriesModel();
            
            require_once "Model/estatusModel.php";
            $this->estatus=new estatusModel();

            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index($id){
            $statement=$this->db->prepare("SELECT * FROM temporadas WHERE t_fk_id_serie=:t_fk_id_serie");
            $statement->execute(
                array(
                    ":t_fk_id_serie"=>$id
                )
            );
            $statement=$statement->fetchAll();
            return $statement;
        }
        public function view($id){
            $statement=$this->db->prepare("SELECT * FROM temporadas where id_temporada = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
            $statement=$statement->fetch();
            return $statement;
        }
        public function create($nombre,$serie,$estatus){
            $statement=$this->db->prepare("INSERT INTO temporadas VALUES(null,:t_nombre,:t_fk_id_serie,:t_fk_id_estatus )");
            $statement->execute(
                array(
                    ":t_nombre"=>$nombre,
                    ":t_fk_id_serie"=>$serie,
                    ":t_fk_id_estatus"=>$estatus
                )
            );
            return true;
        }
        public function update($id,$nombre,$serie,$estatus){
            $statement=$this->db->prepare("UPDATE temporadas SET t_nombre= :t_nombre, t_fk_id_serie =:t_fk_id_serie , t_fk_id_estatus = :t_fk_id_estatus  WHERE id_temporada = :id_temporada");
            $statement->execute(
                array(
                    ":id_temporada"=>$id,
                    ":t_nombre"=>$nombre,
                    ":t_fk_id_serie"=>$serie,
                    ":t_fk_id_estatus"=>$estatus
                )
            );
            return true;
        }
        public function delete($id){
            $statement=$this->db->prepare("DELETE FROM temporadas where id_temporada = :id_temporada");
            $statement->execute(
                array(
                    ":id_temporada"=>$id
                )
            );
        }
        public function getFKSeries(){
            return $this->series->index("","");
        }
        public function getFKnameserie($id){
            $dato = $this->series->view($id);
            return $dato['s_nombre'];
        }
        public function getFKEstatus(){
            return $this->estatus->index("","");
        }
        public function getFKnameestatus($id){
            $dato = $this->estatus->view($id);
            return $dato['e_nombre'];
        }
    }
?>