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
                $nombre = $_POST['nombre'];
                $genero = $_POST['genero'];
                $imagen = $_POST['imagen'];
                $this->PeliculaModelo->update($id, $nombre, $genero, $imagen);
                header("Location: index.php");
            }
            else{
                $pelicula = $this->PeliculaModelo->getById($id);
                require "view/update.php";
            }
                
        }

        public function delete($id) {
            $this->PeliculaModelo->delete($id);
            header("Location: index.php");
        }

        public function login() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $this->PeliculaModelo->login($user, $pass);
                header("Location: index.php");
            }
            else{
                require "view/login.php";
            }
        }

        public function loginGet() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $userGet = $_POST["user"];
                $passGet = $_POST["pass"];
                $usuario =  $this->PeliculaModelo->loginGet($userGet);
                if($usuario && password_verify($passGet, $usuario['password'])){
                    session_start();
                    $_SESSION["user"] = $userGet;
                    header("Location: index.php");
                }
                else{
                    echo "INCORRECTO";
                    require "view/loginget.php";
                }  
            }
            else{
                require "view/loginget.php";
            }
        }

    }
?>