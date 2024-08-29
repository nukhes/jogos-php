<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>
    <link rel="stylesheet" href="./estilos/login.css">
    <link rel="stylesheet" href="./estilos/input.css">
    <link rel="stylesheet" href="./estilos/global.css">
    <link rel="stylesheet" href="./estilos/mensagens.css">
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link rel="stylesheet" href="./estilos/tabela.css">
</head>
<body>
    <?php
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
    include("index.php");

    session_destroy();
    setcookie("PHPSESSID", null, -1);
    header('Location:index.php');
    exit();
    
    
    ?>
    
</body>
</html>