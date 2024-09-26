<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>learning about files</h1>
    <?php
    $array_lines = [];
    $array_lines_new = [];
        $fp = fopen("plantillas.csv", "r");
        while (!feof($fp)){
            $lines = fgets($fp);
            array_push($array_lines, $lines);
        }

        foreach ($array_lines as $values){
            $data_lines = explode(",", $values);
            array_push($array_lines_new, $data_lines);
        }

        //remove first position of the array
        array_shift($array_lines_new);
        print_r ($array_lines_new);


        fclose($fp);
    ?>
</body>
</html>