<?php 
    class seriesModel{
        private $db;

        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        
        public function index($inicio,$posPagina){
            $statement=$this->db->prepare("SELECT * FROM series limit $inicio,$posPagina");
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
        public function create($nombre,$descripcion,$imagen,$direcion_imagen,$categoria){
            $statement=$this->db->prepare("INSERT INTO series VALUES(null,:nm,:ds,:img,:dir,:cate)");
            $statement->execute(
                array(
                    ":nm"=>$nombre,
                    ":ds"=>$descripcion,
                    ":img"=>$imagen,
                    ":dir"=>$direcion_imagen,
                    ":cate"=>$categoria
                )
            );
            return true;
        }
        public function update($id,$nombre,$descripcion,$imagen,$direcion_imagen,$categoria){
            $statement=$this->db->prepare("UPDATE series SET s_nombre= :s_nombre, s_descripcion=:s_descripcion, s_imagen=:s_imagen,s_pathimagen=:s_pathimagen, s_fk_id_categoria = :s_fk_id_categoria   WHERE id_serie  = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id,
                    ":s_nombre"=>$nombre,
                    ":s_descripcion"=>$descripcion,
                    ":s_imagen"=>$imagen,
                    ":s_pathimagen"=>$direcion_imagen,
                    ":s_fk_id_categoria"=>$categoria
                )
            );
            return true;
        }
        public function delete($id){
            $statement=$this->db->prepare("DELETE FROM series where id_serie = :idsa");
            $statement->execute(
                array(
                    ":idsa"=>$id
                )
            );
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