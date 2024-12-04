<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Editar Pelicula</h1>

    <form method="POST" action="index.php?action=update&id=<?= $pelicula['id']?>">
        <label for="nombre">Nombre:</label>
        <input class= "form-control" type="text" name="nombre" value="<?= $pelicula['nombre'] ?>">
        <br>
        <label for="genero">Género:</label>
        <input class= "form-control" type="text" name="genero" value="<?= $pelicula['genero'] ?>">
        <br>
        <label for="imagen">Imagen:</label>
        <input class= "form-control" type="text" name="imagen" value="<?= $pelicula['imagen'] ?>">
        <br>
        <button class= "btn btn-primary" type="submit">Actualizar</button>
    </form>
</body>
</html>
