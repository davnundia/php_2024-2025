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
        $visibility = false;

        if(isset($_REQUEST["Send"])){
            $mark1 = $_REQUEST["mark1"];
            $mark2 = $_REQUEST["mark2"];
            $mark3 = $_REQUEST["mark3"];

            if($mark1 > $mark2 AND $mark1 > $mark3){
                $highest = $mark1;
                $highest_mark = "Mark1";
            }
            else if ($mark2 > $mark1 AND $mark2 > $mark3){
                $highest = $mark2;
                $highest_mark = "Mark2";
            }
            else{
                $highest = $mark3;
                $highest_mark = "Mark3";
            }

            $visibility = true;
        }
    ?>

    <h1>The highest mark</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="mark1">Mark1:</label><br>
        <input type="number" name="mark1"><br><br>
        <label for="mark2">Mark2:</label><br>
        <input type="number" name="mark2"><br><br>
        <label for="mark2">Mark3:</label><br>
        <input type="number" name="mark3"><br><br>
        <input type="submit" name="Send" value="Send">
    </form>

    <h2 style="visibility: <?php echo $visibility ? 'visible' : 'hidden'; ?>;">The highest mark is <?php echo $highest_mark ?> with a <?php  echo $highest ?> </h2>
</body>
</html>