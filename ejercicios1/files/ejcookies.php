<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["user"])){
            echo $_COOKIE["user"];
        }
        else{
            setcookie("user", "David", time() + 1000);
        }
    ?>
</body>
</html>