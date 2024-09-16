<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<style>
    h1{
        text-align:center;
    }
    table{
        margin-left: 2%;
    }
    th{
        padding:10px;
    }
</style>
<body>
    <?php
        $array = [ ['name'=>'Aitor', 'height'=>182,'email'=>'aitor@correo.com'],
        ['name'=>'Ana', 'height'=>160,'email'=>'ana@correo.com'],
        ['name'=>'Pablo', 'height'=>165,'email'=>'pablo@correo.com'],
        ['name'=>'Maria', 'height'=>172,'email'=>'maria@correo.com'],
        ['name'=>'David', 'height'=>170,'email'=>'david@correo.com']]
    ?>

    <h1>Bidimensional array</h1>
    <h2>Administrate the personal information</h2>
        <?php
        $length = count($array);
        echo "<table>";
        echo "<tr>";
            echo "<th style = font-size:20px;> Name </th>";
            echo "<th style = font-size:20px;> Height </th>";
            echo "<th style = font-size:20px;> Email </th>";
        echo "</tr>";
        for ($count=0; $count < $length; $count++) { 
            $name = $array[$count]['name'];
            $height = $array[$count]['height'];
            $mail = $array[$count]['email'];

            echo "<tr>";
                echo "<th> $name </th>";
                echo "<th> $height </th>";
                echo "<th> $mail </th>";
            echo "</tr>";

            
        }
        echo "</table>";
        ?>
</body>
</html>