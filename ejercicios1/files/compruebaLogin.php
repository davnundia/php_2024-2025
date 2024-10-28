<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar Login</title>
</head>
<body>
    <?php
        session_start();
        include "session.php";

        $user_true = $_REQUEST["user_true"];
        $pass_true = $_REQUEST["pass_true"];

        $exist = false;
        foreach($_SESSION["session"] as $value){
            if ($value["user"] == $user_true && $value["password"] == $pass_true){
                $exist = true;
            }
        }

        if($exist){
            echo "Hello " . $user_true;
        }
        else{
            echo "User or password incorrect";
        }
        
    ?>
    
</body>
</html>