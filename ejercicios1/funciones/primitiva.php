<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitiva</title>
</head>
<body>
    <h1>The Primitive</h1>
    <?php
        function show_numbers(){
            echo random_numbers();
        }

        function random_numbers(){
            for ($i=0; $i < 6; $i++) { 
                $array_random_numbers[] = rand(1, 49);
            }
            return implode(" ", $array_random_numbers);
        }

        show_numbers();

    ?>
</body>
</html>