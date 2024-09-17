<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coche</title>
</head>
<style>
    h1{
        text-align:center;
    }
    table{
        margin-left: auto; 
        margin-right: auto;
    }
    td{
        padding:10px;
    }
</style>
<body>
    <h1>Inforplateion of several cars</h1>
    <?php
        $array = ['1234ABC' => ['toyota', 'celica', '3 doors'],
        '4321CBA' => ['mazda', 'MX5', '2 doors'],
        '6789ZFG' => ['Ford','Focus','5 doors'],
        '9876GKP' => ['seat', 'panda', '4 dooors']];

        echo "<table>";
        foreach($array as $plate=>$info){
            echo "<tr>";
                echo "<td>";      
                    echo $plate;
                echo "</td>";
                echo "<td>";
                    echo $info[0];
                echo "</td>";
                echo "<td>";
                    echo $info[1];
                echo "</td>";
                echo "<td>";
                    echo $info[2];
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>