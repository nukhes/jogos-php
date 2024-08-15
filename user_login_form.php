<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar</title>
    <link rel="stylesheet" href="./estilos/login.css">
    <link rel="stylesheet" href="./estilos/input.css">
    <link rel="stylesheet" href="./estilos/global.css">
</head>
<body>
    <form action="./user_login.php" method="post">
        <h1>Login</h1>
        <input type="text" name="usuario" id="id" size="10" maxlength="40" placeholder="Nome">
        <input type="password" name="senha" id="senha" maxlength="40" placeholder="Senha">
        <input type="submit" value="Conectar">
    </form>
</body>
</html>