<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Students Marks</h1>
    <form action="calificaciones.php" method="post">
        <input type="text" placeholder="Student" name="student">
        <input type="number" placeholder="Mark1" name="mark1">
        <input type="number" placeholder="Mark2" name="mark2">
        <input type="number" placeholder="Mark3" name="mark3">
        <input type="submit">
    </form>
    <?php
        echo "<h1>Student List</h1>";
        echo "<tl>";
            echo "<td>Name </td>";
            echo "<td>First </td>";
            echo "<td>Second </td>";
            echo "<td>Third </td>";
            echo "<td>Average </td>";
        echo "<tl>";

        session_start();
        //$students = [];
        /*
        if(isset($_REQUEST["student"])){
            echo $_REQUEST["student"];
            array_push($students, $_REQUEST["student"]);
        }
        */
        if(isset($_REQUEST["student"])){
            if(isset($_SESSION["array_students"])){
                $_SESSION["array_students"][] = $_REQUEST["student"];
                //array_push($_SESSION["array_students"], $_REQUEST["student"]);
            }
            else{
                $_SESSION["array_students"] = [];
                //$_SESSION["array_students"][] = $_REQUEST["student"];
            }
    
            print_r ($_SESSION["array_students"]);
        }

        if(isset($_REQUEST["delete_session"])){
            session_destroy();
            echo "la sesion se ha borrado";
        }
        
        
        //ver porque no va el name
    ?>
    
    <a href="calificaciones.php" name="delete_session">borrar</a>
</body>
</html>