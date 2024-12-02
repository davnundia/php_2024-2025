<?php
    require_once "/modelo/PeliculaModelo.php";
    class PeliculaController {
        private $modelo_pelicula;

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
                $this->modelo_pelicula->insert($nombre, $genero, $imagen);
                header("Location: index.php");
            } 
            else {
                require "view/create.php";
            }
        }

        public function update($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $titulo = $_POST['nombre'];
                $genero = $_POST['genero'];
                $precio = $_POST['imagen'];
                $this->modelo_pelicula->update($id, $nombre, $genero, $imagen);
                header("Location: index.php");
                }
                else{
                    require "view/update.php";
                }
                
        }

        public function delete($id) {
            $this->modelo_pelicula->delete($id);
            header("Location: index.php");
        }
            
            

    }
?>