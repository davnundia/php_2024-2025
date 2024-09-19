<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprueba_hora</title>
</head>
<body>
    <h1>Check the hour</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="hour">Select a Hour</label><br>
        <input type="text" name="hour" id="" placeholder="hour:min:sec"><br><br>
        <input type="submit" name="Send" id=""><br>
    </form>
    <?php
        $hour = $_REQUEST["hour"];

        $hour_array = explode(":",$hour);
        function validate_hour($hour_array){
            $count = 0;
            foreach ($hour_array as $value){
                if($count == 0){
                    $check = "horas";
                }
                elseif($count == 1){
                    $check = "minutos";
                }
                else{
                    $check = "segundos";
                }

                if ($count == 0){
                    if($value > 23 || $value < 0){
                        echo "la hora no es valida porque no puede haber " . $value . " " . $check;
                        return false;  
                    }
                    
                }
                else{
                    if($value > 59 || $value < 0){
                        echo "la hora no es valida porque no puede haber " . $value . " " . $check;
                        return false;
                    }
                    
                }
                $count++;
            }
            return true;
        }
        
        if(validate_hour($hour_array)){
            echo "La hora " . $hour . " es valida";
        }


    ?>
</body>
</html>