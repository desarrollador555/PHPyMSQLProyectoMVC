<?php 
    class categoriaModel{
        private $db;

        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }
        public function index(){
            $statement=$this->db->prepare("select categoria.id_categoria, COUNT(categoria.id_categoria) as Total, categoria.ce_nombre as Nombre from categoria INNER join series on categoria.id_categoria = series.s_fk_id_categoria WHERE categoria.id_categoria=series.s_fk_id_categoria GROUP BY(categoria.ce_nombre) ORDER BY categoria.ce_nombre");
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