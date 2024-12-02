<?php
    require_once "modelo/modelo.php";
    class PeliculaController {
        private $modelo_pelicula;

        public function __construct() {
            $this->PeliculaModelo = new Pelicula();
        }

        public function index() {
            $videojuegos = $this->PeliculaModelo->mostrar();
            require "view/mostrar.php";
        }

        public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = $_POST['nombre'];
                $genero = $_POST['genero'];
                $imagen = $_POST['imagen'];
                $this->PeliculaModelo->insert($nombre, $genero, $imagen);
                header("Location: index.php");
            } 
            else {
                require "view/create.php";
            }

        }

    }
?>