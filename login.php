<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action= "">
    <h2> LOGIN </h2>
        <label for="Usuario">USUARIO:</label>
        <input type="text" step="any" name="Usuario" id="Usuario" required>
        <br><br>
        <label for="logUsuario">LOGIN DE USUARIO:</label>
        <input type="text" step="any" name="Usuario" id="Usuario" required>
        <br><br>
        <label for="Password">PASSWORD:</label>
        <input type="password" minlength="6" name="Password" id="Password" required>
        <br><br>
        <label for="conPassword">CONFIRMAR PASSWORD:</label>
        <input type="password" minlength="6" name="conPassword" id="conPassword" required>
        <br><br>
        <button type="submit" name="Registrarte">REGISTRAR</button>
    </form>
</body>
</html>