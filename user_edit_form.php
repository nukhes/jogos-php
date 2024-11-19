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

    <?php 
        $q = "SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario = '" . $_SESSION['user'] . "'";

        $busca = $banco->query($q);
        $reg = $busca->fetch_object();
    ?>

    <h1>Alteração de Dados</h1>
    <form action="user_edit.php" method="POST">
        <span>Usuário</span>
        <input type="text" name="usuario" id="usuario" size="10" maxlength="10" readonly value="<?php echo $reg->usuario; ?>">

        <span>Nome</span>
        <input type="text" name="nome" id="nome" size="10" maxlength="10" value="<?php echo $reg->nome; ?>">

        <span>Tipo</span>
        <input type="text" name="tipo" id="tipo" size="10" maxlength="10" readonly value="<?php echo $reg->tipo; ?>">

        <span>Senha</span>
        <input type="password" name="senha1" id="senha1" size="10" maxlength="10">

        <span>Confirme a senha</span>
        <input type="password" name="senha2" id="senha2" size="10" maxlength="10">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>