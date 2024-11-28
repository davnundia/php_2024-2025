<?php
    $dsn = 'mysql:dbname=Peliculas;host=peliculas';
    $usuario = 'root';
    $contraseña = '';
    try {
        $pdo = new PDO($dsn, $usuario, $contraseña);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    class Conexion {
        private $dsn;
        private $pdo;
        private $host;
        private $nombreBD ;
        private $usuario;
        private $password ;

        public function __construct(){
            $this->$dsn=  'mysql:dbname=Peliculas;host=peliculas';
            $this->pdo="";
            $this->usuario = "root";
            $this->password = "";
        }

        public function conectar(){
            try{
                $this->pdo = new PDO($this->$dsn,$this->usuario, $this->password);
                return $this->pdo;
                } catch (PDOException $e) {
                print " <p class=\"aviso\">Error: No puede conectarse con
                la base de datos. {$e->getMessage()}</p>\n";
                exit;
            }
        }
    }

?>