<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
    $image = $_FILES["image"];

    $img_name = $image["name"];
    $img_type = $image["type"];
    $img_size = $image["size"];
    $img_error = $image["error"];
    $img_tmp = $image["tmp_name"];

    //Create a folder named uploads and then move the image tmp to uploads
    $img_url = "uploads/{$img_name}";
    move_uploaded_file($img_tmp, $img_url);


    if(isset($image)){
        //if error = 0 is correct, other number is a real error
        if($img_error == 0){
            echo "<div class='container text-center'>";
                echo "<div class='row'>";
                    echo "<div class='col'>";
                        echo "<h1>Propieties of the image</h1>";
                        echo "<br>";
                        echo "<img src='$img_url' style='width:300px; height:auto;'>";
                        echo "<br>";
                        echo "Url: " . $img_url; 
                        echo "<br>";
                        echo "Name: " . $img_name;
                        echo "<br>";
                        echo "Size: " . $img_size . "bytes";
                        echo "<br>";
                        echo "<a href='subidaImagen_view.html'>Volver al fomulario</a>";
                    echo "</div>";

                    $files = scandir('uploads/');
                    $files = array_diff($files, array('.', '..'));
                    echo "<div class='col'>";
                    echo "<h2>List uploaded images</h2>";
                        foreach ($files as $file) {
                            echo "<li>$file</li>";
                        }
                    echo "</div>";

                echo "</div>";
            echo "</div>";


            }
        else{
            echo $img_error;
            echo "error";
        }
    }



    header("Refresh:5 ;url=subidaImagen_view.html");

?>