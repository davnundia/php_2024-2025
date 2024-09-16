<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array1</title>
</head>
<body>
    <?php
        //create random numbers between 0-99
        function rand_in_range($start, $end) {
            return rand($start, $end);
        }

        $array = [];

        //create the array with 50 numbers
        function fill_array($array){
            for ($count=0; $count <= 50; $count++) { 
                $num = rand_in_range(0, 99);
                //if the number is in the array turn back and repeat the loop
                if(in_array($num, $array)){
                    $count--;
                }
                else{
                    array_push($array, $num);
                }
            }
        }
        

        //print the array as a list with all the values
        function print_list($array){
            echo "<ul>";
            foreach ($array as $value) {
                echo "<li>$value</li>";
            }
            echo "</ul>";
        }


        //order the list
        function order_list($array, $length){
            $end_loop = true;
            
            for ($position=0; $position < $length - 1; $position++) { 
                $first = $array[$position];
                $second = $array[$position + 1];

                if($first > $second){
                    $array[$position] = $second;
                    $array[$position + 1] = $first;
                    $end_loop = false;
                }
            }
            $length--;
            if(!$end_loop and $length > 1){
                order_list($array, $length);
            }
        }


        //execution area
        fill_array($array);
        $length = count($array);
        order_list($array, $length);
        print_list($array);

    ?>

</body>
</html>