<?php
     //$conexion = $pdo->query("SELECT * FROM peliculas");

     //while ($row = $conexion->fetch(PDO::FETCH_ASSOC))

     foreach ($peliculas as $pelicula){
        echo "<tr>";
            echo "<td>" . $pelicula['id'] . "</td>";
            echo "<td>" . $pelicula['nombre'] . "</td>";
            echo "<td>" . $pelicula['genero'] . "</td>";
            echo "<td>" . $pelicula['imagen'] . "</td>";
        echo "<tr>";
     }
?>