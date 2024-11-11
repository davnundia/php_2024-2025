<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="create_nombre">Nombre: </label>
        <input type="text" name="create_nombre"><br>
        <label for="create_edad">Edad: </label>
        <input type="text" name="create_edad"><br>
        <input type="submit" name="submit" value="Enviar">
    </form>


    <?php
        include 'bbdd.php';
        /*
        $insercion = $pdo->prepare("INSERT INTO persona(nombre, edad)"." VALUES('User', 6)");
        $insercion->execute();
        
        header("Refresh:5 ;url=index.php");
        */
        if(isset($_POST["submit"])){
            $create_nombre = $_POST["create_nombre"];
            $create_edad = $_POST["create_edad"];
    
            $stmt = $pdo->prepare("INSERT INTO persona(nombre, edad) VALUES(:nombre, :edad)");
            $stmt->bindParam(':nombre', $create_nombre);
            $stmt->bindParam(':edad', $create_edad);
            $stmt->execute();

            header("Refresh:1 ;url=index.php");
        }

    ?>
</body>
</html>

