<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>casas_rurales</title>
</head>
<body>
    <?php
     $array_correct_users=[];
        $fp = fopen("casas_rurales.csv", "r");
        //recibe the data and keep it on array
        while(!feof($fp)) {
            $line = fgets($fp);
            $array_users[] = $line;
        }
        
        //separate each field
        foreach($array_users as $values){   
            $array_users_new[] = explode(";", $values);
        }

        $header = array_shift($array_users_new);

        //create the asociative array 
        foreach($array_users_new as $row){ 
            if(count($row) == count($header)){
                $array_asociative[] = array_combine($header, $row);
            }
        }
      
        //read the array and filtrate the data
        foreach ($array_asociative as $users){
            if(empty($users["telefono"])){
                $array_discard[] = $users;
            }
            else{
                $array_correct_users[] = $users;
            }
        }
        
        fclose($fp);
        
    ?>
</body>
</html>