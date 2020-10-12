<?php
require_once "Config/constantes.php";
    function cargarController($controller){
        $nombreController=$controller."Controller";
        $archivoController="Controller/".$nombreController.".php";
        if(!is_file($archivoController)){
            
            require_once "Controller/".Controller."Controller.php";
            $nombreController=Controller."Controller";
            $objetoController=new $nombreController();
            return $objetoController;
        }else{
            require_once $archivoController;
            $objetoController=new $nombreController();
            return $objetoController;
        }
    }
    function cargarAccion($controller,$accion){
        if(method_exists($controller,$accion)){
            $controller->$accion();
        }else{
            $accion=Accion;
            $controller->$accion();
        }
    }
?>