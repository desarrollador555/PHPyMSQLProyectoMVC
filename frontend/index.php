<?php
    require_once "Config/constantes.php";
    require_once "Core/route.php";
    require_once "Controller/estatusController.php";
    require_once carpeta."Asset/css/estilos.css";
    require_once "View/header/header.php";

    if(isset($_GET['c'])){
        $controller=$_GET['c'];
        $controller=cargarController($controller);
        if(isset($_GET['a'])){
            $accion=$_GET['a'];
            cargarAccion($controller,$accion);
        }else{
            cargarAccion($controller,Accion);
        }
    }else{
        $controller=cargarController(Controller);
        cargarAccion($controller,Accion);
    }
    require_once "View/header/footer.php";

?>