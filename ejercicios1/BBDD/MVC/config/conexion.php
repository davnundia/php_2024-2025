<?php
    class Conexion {
        private $dsn;
        private $pdo;
        private $usuario;
        private $password ;

        public function __construct(){
            $this->dsn="mysql:dbname=Peliculas;host=localhost";
            $this->pdo="";
            $this->usuario ="root";
            $this->password = "";
        }

        public function conectar(){
            try{
                $this->pdo = new PDO($this->dsn,$this->usuario, $this->password);
                return $this->pdo;
            } 
            catch (PDOException $e) {
                print " <p class=\"aviso\">Error: No puede conectarse con
                la base de datos. {$e->getMessage()}</p>\n";
                exit;
            }
        }
    }

?>