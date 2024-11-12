<?php
include 'bbdd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM task WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

header("Refresh:1 ;url=index.php");
?>
