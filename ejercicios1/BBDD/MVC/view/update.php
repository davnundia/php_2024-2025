<h1>Editar Pelicula</h1>

<form method="POST" action="index.php?action=edit&id=<?= $pelicula['id']?>">
    <label for="titulo">Título:</label>
    <input type="text" name="nombre" value="<?= $pelicula['nombre'] ?>" required>
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" value="<?= $pelicula['genero'] ?>" required>
    <br>
    <label for="precio">Imagen:</label>
    <input type="text" name="imagen" value="<?= $pelicula['imagen'] ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>