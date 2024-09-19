<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fraseImpares</title>
</head>
<body>
    <h1>Only the odd positions</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="txt">Insert a sentence:</label><br>
        <input type="text" name="txt" id=""><br>
        <input type="submit" name="Send"><br><br>
    </form>
    <?php
        $txt = $_REQUEST["txt"];

        function odd($txt){
            $array_odd = [];
            for ($cont=0; $cont < strlen($txt); $cont++) { 
                if($cont%2 == 1){
                    array_push($array_odd, $txt[$cont]);
                }
            }
            return implode('', $array_odd);
        }

        if(isset($txt)){
            echo "The odd numbers: " . odd($txt);
        }
    ?>
</body>
</html>