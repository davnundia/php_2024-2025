<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matematicas</title>
</head>
<body>
    <h1>Working with numbers</h1>
    <form action="" method="post">
        <label for="num">Insert a number:</label><br>
        <input type="number" name="num"><br><br>
        <label for="pos">Choose the position you want know: </label><br>
        <input type="number" name="pos" placeholder="first position is 0"><br><br>
        <label for="quant">What quantity of digits want eliminate: </label><br>
        <input type="number" name="quant" placeholder="for the both sides"><br><br>
        <input type="submit" name="Send"><br><br>
    </form>
    <?php   
        $num = $_REQUEST["num"];
        $pos = $_REQUEST["pos"];
        $quant = $_REQUEST["quant"];


        function digits(int $num){
            //count the total digits
            $lenght = strlen($num);
            return $lenght;
        }

        function digitN(int $num, int $pos){
            //Search a specific number
            $num_txt = strval($num);
            $number_searched = $num_txt[$pos];

            return $number_searched;
            
        }

        function delete_behind(int $num, int $quant){
            //delete the numbers from the right 
            $num_txt = strval($num);
            if ($quant > strlen($num_txt)){
                $substring_left = "";
            }
            else{
                $substring_left = substr($num_txt, 0, -$quant);
            }
            return $substring_left;
        }

        function delete_front(int $num, int $quant){
            //delete the numbers from the left 
            $num_txt = strval($num);
            if ($quant > strlen($num_txt)){
                $substring_right = "";
            }
            else{
                $substring_right = substr($num_txt,$quant);
            }
            return $substring_right;
        }

        $total_digits = digits($num);
        $number_searched = digitN($num, $pos);
        $substring_left = delete_behind($num, $quant);
        $substring_right = delete_front($num, $quant);


        echo "The number is " . $num . "<br>";
        echo "The number has " . $total_digits . " digits<br>";
        echo "In the position " . $pos .  " was the number " . $number_searched . "<br>";
        echo "If we remove " . $quant . " numbers from the right we get :" . $substring_left . "<br>";
        echo "If we remove " . $quant . " numbers from the left we get :" . $substring_right . "<br>";

    ?>
</body>
</html>