<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area_circulo</title>
</head>
<style>
    h1{
        text-align:center;
    }
</style>
<body>
    <h1>Calculate the area of the circle</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="radius">Radius value:</label><br>
        <input type="number" name="radius" step="0.01" id="radius" placeholder = "example 3.5"><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
        if(isset($_REQUEST["radius"])){
            $radius = $_REQUEST["radius"];
        }
        else{
            $radius = 3.5;
        }

        $pi = 3.14;
        $circle_area = $pi * ($radius * $radius)
    ?>

    <h2>The circle area is <?php echo $circle_area ?> m2</h2>

</body>
</html>