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
 
    <div id="corpo">

        <?php 
            require_once "includes/banco.php";
            require_once "includes/funcoes.php";
            require_once "includes/login.php";

            if(!is_logado()) {
                echo Mensagem::erro("Efetue o Login para editar seus dados");
            } else {
                if (!isset($_POST['usuario'])) {
                    include "user_edit_form.php";
                } else {
                    $usuario = array(
                        "id" => $_POST['usuario']??null,
                        "nome" => $_POST['nome']??null,
                        "tipo" => $_POST['tipo']??null,
                        "senha1" => $_POST['senha1']??null,
                        "senha2" => $_POST['senha2']??null
                    );

                    $q = "UPDATE usuarios SET usuario = '".$usuario["id"]."', nome = '".$usuario["nome"]."'";

                    if (empty(($usuario["senha1"])) || is_null($usuario["senha1"])) {
                        echo Mensagem::aviso("Senha antiga mantida");
                    } else {
                        if ($usuario["senha1"] === $usuario["senha2"]) {
                            $senha = gerarHash($usuario["senha1"]);
                            $q .= ", senha = '$senha'";
                        } else {
                            echo Mensagem::erro("Senhas não coincidem");
                        }
                    }

                    $q .= "WHERE usuario = '" . $_SESSION['user'] . "'";

                    if ($banco->query(($q))) {
                        echo Mensagem::sucesso("Usuário Alterado com sucesso");
                        logout();
                        echo Mensagem::aviso("Por segurança efetue o <a href='user_login.php'>Login</a> novamente.");
                    } else {
                        echo Mensagem::erro("Não foi possível alterar os dados");
                    }
                }
            }
        ?>
        <?php echo Mensagem::voltar(); ?>
    </div>
    
</body>
</html>