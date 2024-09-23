<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analizador</title>
</head>
<style>
    h1{
        text-align:center;
    }
</style>
<body>
    <h1>Analyze the sentence</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="txt">Insert a sentence: </label><br>
        <input type="text" name="txt" id=""><br><br>
        <input type="submit" name="Send" id=""><br><br>
    </form>
    <?php
        $txt = $_REQUEST["txt"];

        function count_letters($words){
            $total_letters = strlen($words);
            return $total_letters;
        }

        function count_letters_words($words){
            foreach ($words as $value){
                echo $value . " has " . count_letters($value) . " letters" . "<br>";
            }
        }

        $words = str_word_count($txt, 1);
        echo "The sentence has " . count(str_word_count($txt, 1)) . " words <br>";
        echo "The sentence has " . count_letters(implode("",$words)) . " letters <br>";
        count_letters_words($words);

    ?>
</body>
</html>