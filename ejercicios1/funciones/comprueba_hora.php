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
        print_r($hour_array);

    ?>
</body>
</html>