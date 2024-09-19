<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cani.php</title>
</head>
<body>
    <h1>Transform the sentence</h1>
    <form action="" method="post">
        <label for="txt">Insert a sentence:</label><br>
        <input type="text" name="txt" id=""><br>
        <input type="submit" name="Send"><br><br>
    </form>
    <?php 
        $txt = $_REQUEST["txt"];   
        
        function alternate($txt){
            $txt_cani = [];
            $upper = true;
            for ($count=0; $count < strlen($txt); $count++) { 
                $letter = $txt[$count];
                if(ctype_alpha($letter)){
                    if($upper){
                        array_push($txt_cani, strtoupper($txt[$count]));
                        $upper = false;
                    }
                    else{
                        array_push($txt_cani, $txt[$count]);
                        $upper = true;
                    }
                }
                else{
                    array_push($txt_cani, $txt[$count]);
                }  
            }
            return implode("",$txt_cani);
        }

        echo alternate($txt);
    ?>
</body>
</html>