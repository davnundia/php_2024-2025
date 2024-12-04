<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
 table{
    margin-left:20%;
 }
 th, td{
    border:1px solid;
    padding:10px;

 }

</style>

<h1>Mostrar Peliculas</h1>


<a href="index.php?action=create">Agregar Pelicula</a>
<?php
session_start();
if(isset($_SESSION["user"])){
    echo $_SESSION["user"];
}
else{
    echo '<a href="index.php?action=login">Registrarse</a>';
    echo '<a href="index.php?action=loginGet">Login</a>';
}
?>

<table>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">GENERO</th>
        <th scope="col">IMAGEN</th>
        <th scope="col">ACCIONES</th>
    </tr>

<?php
     foreach ($peliculas as $pelicula){
        echo "<tr>";
            echo "<th scope='row'>" . $pelicula['id'] . "</th>";
            echo "<td>" . $pelicula['nombre'] . "</td>";
            echo "<td>" . $pelicula['genero'] . "</td>";
            echo "<td><img src='" . $pelicula['imagen'] . "' style='width:100px;'></td>";
            echo "<td>";
                echo "<a href=index.php?action=update&id=" . $pelicula['id'] . ">Editar</a>";
                echo "<br>";
                echo "<a href=index.php?action=delete&id=" . $pelicula['id'] . ">Eliminar</a>";
        echo "<tr>";
     }
?>
</table>