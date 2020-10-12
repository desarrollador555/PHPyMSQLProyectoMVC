<?php
    class database{
        public static function conexion(){
            try{
                $conexion=new PDO("mysql:host=localhost;dbname=proyectopersonal","root","");
                return $conexion;
            }catch(PDOException $e){
                return false;
            }
        }
    }

?>