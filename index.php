<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link rel="stylesheet" href="./estilos/mensagens.css">
    <link rel="stylesheet" href="./estilos/input.css">
    <link rel="stylesheet" href="./estilos/tabela.css">
    <link rel="stylesheet" href="./estilos/global.css">
</head>
<body>
    <?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    require_once "includes/login.php";
    $ordem =$_GET['o'] ?? "n";
    $chave = $_GET['c'] ?? "";
    ?>
 
    <div id="corpo">
        <?php include_once "topo.php";?>

        <h2>Escolha seu jogo</h2>


        <?php include_once "./home/filtrar-jogos.php"; ?>
        <?php include_once "./home/listagem-jogos.php"; ?>
        <?php include_once "rodape.php"; ?>
    </div>
    
</body>
</html>