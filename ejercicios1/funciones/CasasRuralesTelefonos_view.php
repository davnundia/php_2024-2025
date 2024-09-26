<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista casas rurales</title>
</head>
<style>
    td{
        padding:10px;
    }
    #first{
        font-size: 20px;
        font-weight: bold;
    }
    tr, h1{
        text-align: center;
    }
    table{
        margin-left: auto; 
        margin-right: auto;
    }
</style>
<body>
    <h1>Users data - Learning how to manipulate files</h1>
    <table>
        <tr id="first">
            <td>Id</td>
            <td>Locality</td>
            <td>Name</td>
            <td>Phone</td> 
        </tr>
        <?php
            include 'CasasRuralesTelefonos.php';

            foreach($array_correct_users as $data){
                echo "<tr>";
                    echo "<td>" . $data[0] . "</td>";
                    echo "<td>" . $data[1] . "</td>";
                    echo "<td>" . $data[3] . "</td>";
                    echo "<td>" . $data[9] . "</td>";
                echo "</tr>";
            }   
        ?>
    </table>
</body>
</html>