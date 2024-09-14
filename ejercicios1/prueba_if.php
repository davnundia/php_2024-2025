<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba_if</title>
</head>
<style>
    h1{
        text-align:center;
    }
</style>
<body>
    <?php
        $mark1 = $_REQUEST["mark1"];
        $mark2 = $_REQUEST["mark2"];
        if($mark1 > $mark2){
            $mayor = $mark1;
        }
        else{
            $mayor = $mark2;
        }
    ?>

    <h1>The highest number</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="mark1">Number1:</label><br>
        <input type="number" name="mark1"><br><br>
        <label for="mark2">Number2:</label><br>
        <input type="number" name="mark2"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>The highest number is <?php echo $mayor ?> </h2>
</body>
</html>