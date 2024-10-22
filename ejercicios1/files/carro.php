<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carro</title>
</head>
<body>
    <?php
        $articulos = array(
            array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
            array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
            array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
            array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio"=> 20)
        );
    ?>

    <h1>Lista de articulos</h1>
    <?php
        echo "<ul>";
        foreach ($articulos as $value) {
            echo "<li><a href='?id=" . $value["id"] . "' name='" . $value["id"] . "'>" . $value["nombre"] . " (" . $value["precio"] . "€)" . "</a></li>";
        }
        echo "</ul>";
    ?>

    <h2>Tu compra</h2>
    <?php
        session_start();
        if(!isset($_SESSION["buy_session"])){
            $_SESSION["buy_session"] = array();
        }
        if (isset($_GET["id"])) {
            $apretar = $_GET["id"];
            foreach ($articulos as $value) {
                if ($value["id"] == $apretar) {
                    $product_purchased = [];
                    $array_combine[] = "nombre";
                    $array_combine[] = "precio";

                    array_push($product_purchased, $value["nombre"], $value["precio"]);
                    $product_purchased = array_combine($array_combine, $product_purchased);
                    //print_r($product_purchased);
                    array_push($_SESSION["buy_session"],$product_purchased);
                    break;
                }
            }
            $array_items = $_SESSION["buy_session"];
            //print_r ($array_items);
            echo "<ul>";
            foreach ($array_items as $item) {
                echo "<li>" . $item["nombre"] . " - " . $item["precio"] . " €" . "</li>";
            }
            echo "</ul>";
        }
        else{
            echo "Nada comprado";
            session_destroy();
        }
    ?>
    <br><br>
    <a href="carro.php"><button type="button">Borrar tu tienda</button></a>
</body>
</html>