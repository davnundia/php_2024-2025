<?php
include 'bbdd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM persona WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $dato_anterior = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    
    $stmt = $pdo->prepare("UPDATE persona SET nombre = :nombre, edad = :edad WHERE id = :id");
    
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':edad', $edad);

    $stmt->execute();

    header("Refresh:0.5 ;url=index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Persona</title>
</head>
<body>
    <h2>Editar Persona</h2>
    <form action="" method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?php echo $dato_anterior['nombre']; ?>"><br><br>
        <label>Edad:</label><br>
        <input type="number" name="edad" value="<?php echo $dato_anterior['edad']; ?>"><br><br>
        <input type="submit" name="submit" value="Actualizar">
    </form>
</body>
</html>
