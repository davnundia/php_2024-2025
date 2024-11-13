<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    #login{
        height: 200px;
        width: 200px;
        margin-left: 40vw; 
        margin-right: 50vw;
    }
</style>
<body>
    <div id = "login">
        <h1>LOGIN</h1>
        <form action="index.php" method="post">
            <input class="form-control" type="text" name="user" aria-label="default input example" placeholder="User" required><br>
    
            <input type="submit" name ="user_sent" value="send">
        </form>
    </div>
</body>
</html>