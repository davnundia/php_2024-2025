<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <h1>EJEMPLO PHP MYSQL CRUD</h1>
    <div id="grid">
        <div id="form">
            <form action="" method="post">
                <input type="text" name="titulo" placeholder="Titulo"><br><br>
                <textarea name="descripcion" placeholder="Descripción"></textarea><br><br>
                <input id="registrar" type="submit" name="submit" value="Registrar">
            </form>
        </div>

        <div id="mostrar">
            <table>
                <tr id="cabecera">
                    <td>Titulo</td>
                    <td>Descripción</td>
                    <td>Creado el:</td>
                    <td>Acción</td>
                </tr>
                <?php
                    include 'bbdd.php';

                    if(isset($_POST["submit"])){
        
                        $titulo = $_POST["titulo"];
                        $descripcion = $_POST["descripcion"];
                
                        $stmt = $pdo->prepare("INSERT INTO task(title, description) VALUES(:titulo, :descripcion)");
                        $stmt->bindParam(':titulo', $titulo);
                        $stmt->bindParam(':descripcion', $descripcion);
                        $stmt->execute();
        
                    }

                    $stmt = $pdo->query("SELECT * FROM task");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td><a href='update.php?id=" . $row['id'] . "'><img src='edit.png'></a>
                                    <a href='delete.php?id=" . $row['id'] . "'><img src='trash-sharp.svg'></a></td>";
                        echo "</tr>";
                    }

                ?>

            </table>
        </div>
    </div>

</body>
</html>