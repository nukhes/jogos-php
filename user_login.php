<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./estilos/global.css">
    <link rel="stylesheet" href="./estilos/mensagens.css">

    <style>
        body {
            padding: 40px 20vw 0 20vw;
        }
    </style>

</head>
<body>
    <?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    require_once "includes/login.php";
    ?>

    <div id="corpo">
        <?php
            $usuario = $_POST['usuario'] ?? null;
            $senha = $_POST['senha'] ?? null;

            if (is_null($usuario) || is_null($senha)) {
                require "user_login_form.php";
            }

            else {
                $query = "select * from usuarios where usuario = '$usuario' limit 1";

                $busca = $banco->query($query);

                if (!$busca) {
                    echo Mensagem::erro('Falha ao acessar o banco!');
                } else {
                    if ($busca->num_rows>0) { // Caso usuário exista

                        $reg = $busca->fetch_object();
                        
                        if (testarHash($senha, $reg->senha)) {
                            echo Mensagem::sucesso('Logado com sucesso!');
                            $_SESSION['user'] = $reg->usuario;
                            $_SESSION['nome'] = $reg->nome;
                            $_SESSION['tipo'] = $reg->tipo;
                        }
                        else {
                            echo Mensagem::erro('Senha inválida!');
                        }
                    } else {
                        echo Mensagem::erro('Nome inválido!');
                    }
                }
            }
        ?>

        
</body>
</html>