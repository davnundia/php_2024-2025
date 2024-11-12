<?php
    $dsn = 'mysql:dbname=Task_db;host=localhost';
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