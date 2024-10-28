<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<style>
    td{
        padding: 10px;
        border: solid 2px;  
    }

</style>
<body>
    <?php



        if(empty($_REQUEST["name"])){
            $name = "name not detected";
        }
        else{
            $name = $_REQUEST["name"];
        }


        if(empty($_REQUEST["mail"])){
            $mail = "mail not detected";
        }
        else{
            $validar_mail = str_split($_REQUEST["mail"]);
  
            if(in_array("@", $validar_mail)){
                $mail = $_REQUEST["mail"];
            }
            else{
                $mail = "mail not founded";
            }
        }

        if(empty($_REQUEST["url"])){
            $url = "URL not detected";
        }
        else{       
            if(str_contains($_REQUEST["url"], '.com')){
                $url = $_REQUEST["url"];
            }
            else{
                $url = "URL not founded";
            }
        }

        if(empty($_REQUEST["sex"])){
            $sex = "sex not detected";
        }
        else{
            $sex = $_REQUEST["sex"];
        }

        if(empty($_REQUEST["persons"])){
            $persons = "persons not detected";
        }
        else{
            $perosns = $_REQUEST["persons"];
        }

        if(empty($_REQUEST["hobbies"])){
            $hobbies = "hobbies not detected";
        }
        else{
            $hobbies = $_REQUEST["hobbies"];
        }

        if(empty($_REQUEST["food"])){
            $food = "food not detected";
        }
        else{
            $food = $_REQUEST["food"];
        }




    ?>
    <table>
        <h2>SHOW DATA</h2>
        <tr>
            <td>Name</td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Mail</td>
            <td><?php echo $mail ?></td>
        </tr>
        <tr>
            <td>URL Personal page</td>
            <td><?php echo $url ?></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td><?php echo $sex ?></td>
        </tr>
        <tr>
            <td>Persons at your home</td>
            <td><?php echo $persons ?></td>
        </tr>
        <tr>
            <td>Hobbies</td>
            <td><?php echo $hobbies ?></td>
        </tr>
        <tr>
            <td>Favourite food</td>
            <td><?php echo $food ?></td>
        </tr>
    </table>
</body>
</html>