<h1>Agregar Videojuego</h1>

<form method="POST" action="index.php?action=create">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" required>
    <br>
    <label for="imagen">Imagen:</label>
    <input type="text" name="imagen" required>
    <br>
    <button type="submit">Guardar</button>
</form>
