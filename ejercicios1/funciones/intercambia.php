<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intercambia</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="first_num">Number A :</label><br>
        <input type="number" name="first_num" id=""><br><br>
        <label for="second_num">Number B :</label><br>
        <input type="number" name="second_num" id=""><br>
        <input type="submit" name="Send">
    </form>
    <?php
        $a = $_REQUEST["first_num"];
        $b = $_REQUEST["second_num"];

        function change(&$a, &$b){
            $change = $a;
            $a = $b;
            $b = $change;
        }


        if (isset($_REQUEST["first_num"]) && isset($_REQUEST["second_num"])) {
            change($a, $b);
            echo "The number A, now is: " . $a . "<br>";
            echo "The number A, now is: " . $b;
        }
    ?>
</body>
</html>