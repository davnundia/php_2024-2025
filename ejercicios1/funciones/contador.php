<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
</head>
<body>
    <h1>List the numbers between two numbers</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num_start">The count start in number:</label><br>
        <input type="number" name="num_start" id=""><br><br>
        <label for="num_finish">The count finish in number:</label><br>
        <input type="number" name="num_finish" id=""><br>
        <input type="submit" name="Send">
    </form>
    <div>
    <?php
        $num_start = $_REQUEST["num_start"];
        $num_finish = $_REQUEST["num_finish"];

        function cuenta($num_start, $num_finish){
            $num_between = $num_finish - $num_start;
            for ($count=0; $count <= $num_between; $count++) { 
                if ($count === $num_between) {
                    echo $num_start + $count;
                }
                else{
                    echo $num_start + $count . ",";
                }
            }
        }
        if (isset($_REQUEST["num_start"]) && isset($_REQUEST["num_finish"])) {
            cuenta($num_start, $num_finish);
        } 

    ?>
    </div>
</body>
</html>