<h1>Mostrar Peliculas</h1>

<a href="index.php?action=create">Agregar Pelicula</a>
<tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>GENERO</th>
    <th>IMAGEN</th>
    <th>ACCIONES</th>
</tr>

<?php
     foreach ($peliculas as $pelicula){
        echo "<tr>";
            echo "<td>" . $pelicula['id'] . "</td>";
            echo "<td>" . $pelicula['nombre'] . "</td>";
            echo "<td>" . $pelicula['genero'] . "</td>";
            echo "<td>" . $pelicula['imagen'] . "</td>";
            echo "<td>";
                echo "<a href=index.php?action=edit&id=" . $pelicula['id'] . ">Editar</a>";
                echo "<a href=index.php?action=delete&id=" . $pelicula['id'] . ">Eliminar</a>";
        echo "<tr>";
     }
?>