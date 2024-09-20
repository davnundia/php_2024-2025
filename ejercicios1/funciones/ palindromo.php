<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> palindromo</title>
</head>
<body>
    <h1>Same start, same end</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="txt">Insert a sentence:</label><br>
        <input type="text" name="txt" id=""><br>
        <input type="submit" name="Send"><br><br>
    </form>
    <?php
        $txt = $_REQUEST["txt"];

        function palindrome($txt){
            $txt_no_space = str_replace(" ", "", $txt);
            $array_left = [];
            $array_right = [];
            for ($count=0; $count < strlen($txt_no_space); $count++) { 
                array_push($array_left, $txt_no_space[$count]); 
            }
            for ($count = strlen($txt_no_space) - 1; $count >= 0; $count--) { 
                array_push($array_right, $txt_no_space[$count]); 
            }

            if ($left_str === $right_str) {
                echo "The sentence is a palindrome";
            } else {
                echo "The sentence is not a palindrome";
            }
            echo "<br> The sentence was: " . $txt;
        }
        palindrome($txt);
    ?>
</body>
</html>