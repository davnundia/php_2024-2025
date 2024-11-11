<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba CRUD</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        include 'bbdd.php';
        $stmt = $pdo->query("SELECT * FROM persona");
        echo "<table>"; 
        echo "<tr class='cabecera'>";
            echo "<td>ID</td>";
            echo "<td>Nombre</td>";
            echo "<td>Edad</td>";
        echo "</tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['edad'] . "</td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | 
                        <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
        echo "<tr><td><a href='create.php'>" . "Create" . "</a></td></tr>";
        echo "</table>"; 
        

    ?>
</body>
</html>