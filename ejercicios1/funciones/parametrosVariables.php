<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parametrosVariables</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Insert a number:</label><br>
        <input type="number" name="num1" id=""><br>
        <label for="num2">Insert a number:</label><br>
        <input type="number" name="num2" id=""><br>
        <label for="num3">Insert a number:</label><br>
        <input type="number" name="num3" id=""><br>
        <input type="submit" name="Enviar">
    </form>

    <?php
        $num1 = $_REQUEST["num1"];
        $num2 = $_REQUEST["num2"];
        $num3 = $_REQUEST["num3"];


        function highest($num1, $num2 , $num3){
            $max = 0;
            $array = func_get_args();
            $length = func_num_args();
            for ($count=0; $count < $length; $count++) {
                if ($max < $array[$count]){
                    $max = func_get_arg($count);
                }
            }
            return $max;
        }

        if (isset($num1) && isset($num2) && isset($num3)) {
            echo "The highest number is: " . highest($num1 , $num2, $num3);
        } 


    ?>
</body>
</html>