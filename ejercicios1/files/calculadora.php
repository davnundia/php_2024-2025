<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <?php

        if(isset($_REQUEST["num_1"]) and isset($_REQUEST["num_2"])){
            $num_1 = $_REQUEST["num_1"];
            $num_2 = $_REQUEST["num_2"];

            if(isset($_REQUEST["button_sum"])){
                $result = $num_1 + $num_2;
            }
            elseif(isset($_REQUEST["button_less"])){
                $result = $num_1 - $num_2;
            }
            elseif(isset($_REQUEST["button_split"])){
                $result = $num_1 / $num_2;
            }
            elseif(isset($_REQUEST["button_multi"])){
                $result = $num_1 * $num_2;
            }

            echo "<h1> The total is = " . $result . "</h1>";
            

        }
        
    ?>
</body>
</html>