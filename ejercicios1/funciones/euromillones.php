<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euromillones</title>
</head>
<body>
    <h1>The Euromillions</h1>
    <?php
        function show_numbers(){
            echo random_numbers();
            echo " - ";
            echo extra_random_numbers();
        }

        function random_numbers(){
            for ($i=0; $i < 5; $i++) { 
                $array_random_numbers[] = rand(1, 50);
            }
            return implode(" ", $array_random_numbers);
        }

        function extra_random_numbers(){
            for ($x=0; $x < 2; $x++) {
                $array_extra_random_numbers[] = rand(1, 9);
            }
            return implode(" ", $array_extra_random_numbers);
        }
        show_numbers();
    ?>
</body>
</html>