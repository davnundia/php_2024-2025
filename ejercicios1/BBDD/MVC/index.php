<?php
    require_once "PeliculaController.php"; 

    $controller = new PeliculaController();
    
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if (method_exists($controller, $action)) {
        if ($id) {
            $controller->$action($id);
        } else {
            $controller->$action();
        }
    }
?>