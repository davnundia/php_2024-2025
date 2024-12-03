<?php
require "config/conexion.php";

class PeliculaModelo{
    private $pdo;

    public function __construct(){
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }

    public function mostrar(){
        $registro = $this->pdo->prepare("SELECT * FROM peliculas");
        $registro->execute();
        return $registro->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id){    
        $insercion = $this->pdo->prepare("DELETE FROM peliculas WHERE id=:id");
        $insercion->bindParam(':id', $id);
        return $insercion->execute();
    }

    public function insert($nombre,$genero,$imagen){
        $insercion = $this->pdo->prepare("INSERT INTO peliculas(nombre,genero,imagen) VALUES (:nombre, :genero, :imagen)");
        $insercion->bindParam(':nombre', $nombre);
        $insercion->bindParam(':genero', $genero);
        $insercion->bindParam(':imagen', $imagen);
        return $insercion->execute();
    }

    public function update($id, $nombre, $genero, $imagen){
        $insercion = $this->pdo->prepare("UPDATE peliculas SET nombre=:nombre, genero=:genero, imagen=:imagen WHERE id=:id");
        $insercion->bindParam(':id', $id);
        $insercion->bindParam(':nombre', $nombre);
        $insercion->bindParam(':genero', $genero);
        $insercion->bindParam(':imagen', $imagen);
        return $insercion->execute();
    }

    public function getById($id){
        $query = "SELECT * FROM peliculas WHERE id = $id";
        $registro = $this->pdo->prepare($query);
        $registro->execute();
        return $registro->fetch();
    }
}


?>