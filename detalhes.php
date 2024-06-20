<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
</head>
<body>
    <?php 
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    ?>

    <div id="corpo">
            <?php
                $c = $_GET['cod'] ?? 0; //se encontrar cod ele armazena em c, caso contrário ele voltará 0
                $busca = $banco->query("select * from jogos where cod= '$c'");
            ?>
            <h1>Detalhes do Jogo</h1>
            <table class='detalhes'>
                <?php
                    if(!$busca){
                        echo "<tr><td>Busca falhou! " . $banco->error . "</td></tr>";
                    }else{
                        if($busca->num_rows == 1){
                            $reg = $busca->fetch_object();
                            echo "<tr><td rowspan='3'><img src='fotos/$reg->capa'/></td></tr>";
                            echo "<tr><td><h2>$reg->nome</h2></td></tr>";
                            echo "<tr><td><span>Nota:$reg->nota/10</span><br>$reg->descricao</td></tr>";
                            echo "<tr><td>Adm</td></tr>";
                        }else{
                            echo "<tr><td>Usuário burro detected!</td></tr>";
                        }  
                    }
                    ?>
          </table>
        </div>              
    </body>
</html>
