<?php
    require_once 'controller/peliculacontroller.php'; 

    $controller = new PeliculaController();

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = "index";
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        $id = null;
    }

    if(method_exists($controller, $action)){
        if($id){
            $controller->$action($id);
        }
        else {
            $controller->$action();
        }
    }
?>