<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>casas_rurales</title>
</head>
<body>
    <?php
        $fp = fopen("casas_rurales.csv", "r");
        //recibe the data and keep it on array
        while(!feof($fp)) {
            $line = fgets($fp);
            $array_users[] = $line;
        }
        //separate each field
        array_shift($array_users);
        foreach($array_users as $values){   
            $array_users_new[] = explode(";", $values);
        }
        //read the array and filtrate the data
        foreach ($array_users_new as $users){
            if(!$users[9] == ""){
                $array_correct_users[] = $users;
            }
        }

        fclose($fp);
                            
    ?>
</body>
</html>