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

        //Take only 1 team adn the number of the player
        foreach ($array_lines_new as $value){
            if($value[1] == "Atlético de Madrid"){
                $array_atleti_players[] = $value;
                $players_dorsal[] = $value[11];
            }
        }
        //order the number of the players
        sort($players_dorsal);

        //create another array, ordering the players
        for ($i=0; $i < count($array_atleti_players); $i++) { 
            foreach($array_atleti_players as $player){
                if($player[11] == $players_dorsal[$i]){
                    $array_order_players[] = $player;
                }
            }
        }      

        fclose($fp);
    ?>
</body>
</html>