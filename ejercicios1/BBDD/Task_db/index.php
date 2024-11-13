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

    <?php
        session_start();

        if(isset($_POST["user_sent"])){
            $_SESSION["user"] =  $_POST["user"];
        }


        if (isset($_SESSION['user'])) {
            echo "La sesión está activa para el usuario: " . $_SESSION['user'];
        } else {
            echo "No hay sesión activa.";
        }


        $actionUrl = $_SESSION["user"] === "user" ? "index.php" : "user.php";

    ?>
    <a href="session_destroy.php">Cerrar sesion</a>

    <div id="grid">
        <div id="form">
            <form action="<?php echo $actionUrl; ?>" method="post">
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
                        $url_update = "update.php?id=" . $row['id'];
                        $actionUrl_update = $_SESSION["user"] === "user" ? $url_update : "user.php";

                        $url_delete = "delete.php?id=" . $row['id'];
                        $actionUrl_delete = $_SESSION["user"] === "user" ? $url_delete : "user.php";
                        
                        echo "<tr>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td>";
                                echo "<a href=" . $actionUrl_update . "><img src='edit.png'></a>";
                                echo "<a href=" . $actionUrl_delete . "><img src='trash-sharp.svg'></a>";
                            echo "</td>";
                        echo "</tr>";
                    }

                ?>

            </table>
        </div>
    </div>

</body>
</html>