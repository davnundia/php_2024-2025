<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrayBidimensional</title>
</head>
<style>
    h1{
        text-align:center;
    }
    td{
        padding:10px;
    }
    table{
        margin-left: auto; 
        margin-right: auto;
    }
</style>
<body>
    <h1>Learning how to do a bidimensional array</h1>
    <?php
        $array = [];
        $nums_in_array = [];
        $max = 0;
        $min = 1000;
        for ($row=0; $row < 6; $row++) {
            for ($column = 0; $column < 9; $column++) {
                $rand_num = rand(100, 999);      
                if(in_array($rand_num, $nums_in_array)){
                    $column--;
                }
                else{
                    array_push($nums_in_array, $rand_num);
                    $array[$row][$column] = $rand_num;
                    if($rand_num > $max){
                        $max_col = $column;
                        $max = $rand_num;
                    }
                    if($rand_num < $min){
                        $min_row = $row;
                        $min = $rand_num;
                    }
                }
            }
        }
        echo "<table>";
        for ($row=0; $row < 6; $row++){
            if($row === $min_row){
                echo "<tr style='background-color: green; color: white;'>";
            }
            else{
                echo "<tr style='background-color: black; color: white;'>";
            }
            for ($column = 0; $column < 9; $column++){
                if($column === $max_col){
                    echo "<td style='background-color: blue; color: white;'>";
                }
                else{
                    echo "<td>";
                    
                }
                echo $array[$row][$column];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";


    ?>
</body>
</html>