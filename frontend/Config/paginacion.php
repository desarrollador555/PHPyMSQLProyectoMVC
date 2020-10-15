<?php
    class paginacion{
        private $db;
        
        public function __construct()
        {
            require_once "Config/database.php";
            $this->db=database::conexion();
        }

        public function obtenerPagina(){
            return $paginaA=(!empty($_GET['p']))?(int)$_GET['p']:1;
        }
        
        public function totalRegistros($nombre){
            $total=$this->db->prepare("SELECT COUNT(*) as total FROM $nombre ");
            $total->execute();
            $total=$total->fetch();
            return $total['total'];
        }
        public function numerodepaginas($totalRegistros,$postPagina){
            return ceil($totalRegistros/$postPagina);
        }
    }

?>