<?php
    require_once "modelo/peliculamodelo.php";
    class PeliculaController {
        private $PeliculaModelo;

        public function __construct() {
            $this->PeliculaModelo = new PeliculaModelo();
        }

        public function index() {
            $peliculas = $this->PeliculaModelo->mostrar();
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

        public function update($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $titulo = $_POST['nombre'];
                $genero = $_POST['genero'];
                $precio = $_POST['imagen'];
                $this->PeliculaModelo->update($id, $nombre, $genero, $imagen);
                header("Location: index.php");
            }
            else{
                require "view/update.php";
            }
                
        }

        public function delete($id) {
            $this->PeliculaModelo->delete($id);
            header("Location: index.php");
        }
            
            

    }
?>