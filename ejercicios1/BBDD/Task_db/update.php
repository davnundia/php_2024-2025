<?php
include 'bbdd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM task WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $dato_anterior = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    $stmt = $pdo->prepare("UPDATE task SET title = :titulo, description = :descripcion WHERE id = :id");
    
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descripcion', $descripcion);

    $stmt->execute();

    header("Refresh:0.5 ;url=index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Task</title>
    <link rel="stylesheet" href="update.css">

</head>
<body>
    <h1>Editar Task</h1>
    <div id="form">
        <form action="" method="post">
            <label>Titulo:</label><br>
            <input type="text" name="titulo" value="<?php echo $dato_anterior['title']; ?>"><br><br>
            <label>Descripción:</label><br>
            <textarea name="descripcion"><?php echo $dato_anterior['description']; ?></textarea><br><br>
            <input type="submit" name="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
