<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrayAsociativo</title>
</head>
<style>
    h1{
        text-align:center;
    }
    div{
        padding: 15px;
    }
    p{
        font-size: 20px;
    }
</style>
<body>
    <h1>Regroup the array</h1>
    <?php
        //create random numbers between 0-1
        function rand_in_range($start, $end) {
            return rand($start, $end);
        }

        $array = [];

        for ($count=0; $count <= 100; $count++) { 
            $num = rand(0, 1);
            if($num === 0){
                array_push($array, "M");
            }
            else{
                array_push($array, "F");
            }
        }
        print_r($array);

    ?>
    <div>
        <h2>We have:</h2>
        <p>
            <?php
                $conteo = array_count_values($array);
                echo "Number of M: " . ($conteo['M']) . "<br>";
                echo "Number of F: " . ($conteo['F'] ) . "<br>";
            ?>
        </p>
    </div>

</body>
</html>