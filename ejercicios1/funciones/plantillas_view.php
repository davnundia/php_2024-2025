<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista plantillas</title>
</head>
<style>
    td{
        padding:10px;
    }
    td, h1, h2{
        text-align:center;
    }
    table{
        margin-left: auto; 
        margin-right: auto;
    }
    #first{
        font-size: 20px;
        font-weight: bold;
    }
</style>
<body>
    <?php
        include 'plantillas.php';
        
        echo "<h2>Template</h2>";
        echo "<table>";
        echo "<tr id='first'>";
            echo "<td> Dorsal </td>";
            echo "<td> Name </td>";
            echo "<td> Surnames </td>";
            echo "<td> Position </td>";
            echo "<td> Team </td>";
        echo "</tr>";
        foreach ($array_lines_new as $values){
            echo "<tr>";
                echo "<td> $values[11] </td>";
                echo "<td> $values[4] </td>";
                echo "<td> $values[5] </td>";
                echo "<td> $values[10] </td>";
                echo "<td> $values[1] </td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<br>";
        echo "<h2>Order Template</h2>";

        echo "<table>";
            echo "<tr id='first'>";
                echo "<td> Dorsal </td>";
                echo "<td> Name </td>";
                echo "<td> Surnames </td>";
                echo "<td> Position </td>";
                echo "<td> Team </td>";
            echo "</tr>";
        foreach ($array_order_players as $order_player){
            echo "<tr>";
                echo "<td> $order_player[11] </td>";
                echo "<td> $order_player[4] </td>";
                echo "<td> $order_player[5] </td>";
                echo "<td> $order_player[10] </td>";
                echo "<td> $order_player[1] </td>";
            echo "</tr>";
        }
        echo "</table>";
         
    ?>
</body>
</html>