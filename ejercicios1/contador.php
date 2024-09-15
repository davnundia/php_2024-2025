<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
</head>
<style>
    h1{
        text-align:center;
    }
    #for_table{
        padding: 10px;
        word-wrap: break-word; 
        overflow-wrap: break-word; 
        white-space: normal; 
    }
    #while_table{
        padding: 10px;
    }
</style>
<body>
    <h1>Creating a loop</h1>
    <h2>FOR</h2>
    <div id="for_table">
        <?php
            for ($counter = 1; $counter <= 100; $counter++) {
                if ($counter === 100) {
                    echo $counter;
                }
                else{
                    echo $counter . ",";

                }
            }
        ?>
    </div>
    
    <h2>WHILE</h2>
    <div id="while_table">
        <?php
            $end_while = 10;
            while ($end_while >= 0) {
                if ($end_while === 0) {
                    echo $end_while;
                }
                else{
                    echo $end_while . ",";

                }
                $end_while--;
            }
        ?>
    </div>

</body>
</html>