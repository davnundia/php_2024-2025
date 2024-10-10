<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in simple</title>
</head>
<body>
    <div>
        <h1>Sign in</h1>
        <form action="signin.php" method = "post">
            <input class="form-control" type="text" name="user" aria-label="default input example" placeholder="User" required><br>
    
            <input class="form-control" type="text" name="pass" aria-label="default input example" placeholder="Password" required><br><br>
            <input type="submit" value= "send"><br>
        </form>
    </div>

    <?php
        $array_user = [];
        $i = 0; 

        //Check correct user
        if(empty($_REQUEST["user"])){
            $user = "Invalid user, try another one";
        }
        else{
            $user = $_REQUEST["user"];
            if(in_array($user, $array_user)){
                $user = "user existed yet, try another one";
            }
            else{
                //check correct password
                if(empty($_REQUEST["pass"])){
                    $pass = "Invalid password, try another one";
                }
                else{
                    $i++;
                    $pass = $_REQUEST["pass"];
                    //do it asociative
                    $user_combine = "user";
                    $pass_combine = "password";
                    $combine[] = $user_combine; 
                    $combine[] = $pass_combine;

                    $userx[] = "user" . $i;

                    $array_add[] = $user;
                    $array_add[] = $pass;
              

                    $array_user_id = array_combine($combine, $array_add);
                    
                    $array_all_users[] = $array_user_id;

                    $array_all_users = array_combine($userx, $array_all_users);
                    
                    print_r ($array_all_users);


                }
            }
        }
        
    ?>
</body>
</html>