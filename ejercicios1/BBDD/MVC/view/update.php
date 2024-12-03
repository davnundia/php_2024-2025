<h1>Editar Pelicula</h1>

<form method="POST" action="index.php?action=update&id=<?= $pelicula['id']?>">
    <label for="titulo">Título:</label>
    <input type="text" name="nombre" value="<?= $pelicula['nombre'] ?>">
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" value="<?= $pelicula['genero'] ?>">
    <br>
    <label for="precio">Imagen:</label>
    <input type="text" name="imagen" value="<?= $pelicula['imagen'] ?>">
    <br>
    <button type="submit">Actualizar</button>
</form>