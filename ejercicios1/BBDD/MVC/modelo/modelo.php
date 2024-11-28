<?php
require "/config/conexion.php";

class Pelicula{

    private $pdo;
    public function __construct(){
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }

    public function mostrar(){
        $consulta = "SELECT * FROM peliculas";
        $registro = $this->pdo->prepare($query);
        $registro->execute();
        return $registro->fetchAll();
    }

    public function delete($id){    
        $insercion = $this->pdo->prepare("DELETE FROM peliculas WHERE id=:id");
        $insercion->bindParam(':id', $id);
        return $insercion->execute();
    }

    public function insert($nombre,$genero,$imagen){
        $insercion = $this->pdo->prepare("INSERT INTO peliculas(nombre,genero,imagen) VALUES (:titulo, :genero, :precio)");
        $insercion->bindParam(':nombre', $nombre);
        $insercion->bindParam(':genero', $genero);
        $insercion->bindParam(':imagen', $imagen);
        return $insercion->execute();
    }




}


?>