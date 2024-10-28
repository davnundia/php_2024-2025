<?php
    $array_user = [];

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
                $pass = $_REQUEST["pass"];
                //do it asociative
                $user_combine = "user";
                $pass_combine = "password";
                $combine[] = $user_combine; 
                $combine[] = $pass_combine;


                $array_add[] = $user;
                $array_add[] = $pass;
            

                $array_user_id = array_combine($combine, $array_add);

                session_start();
                if (!isset($_SESSION["session"])) {
                    $_SESSION["session"] = array();
                }
                
                $_SESSION["session"][]=$array_user_id;

                include "session.php";
            }
        }
    }
    
    header("Refresh:5 ;url=login.html");
?>
