<header>
    <h1 id="logo">Bluezão Jogos</h1>
    <?php
        if (empty($_SESSION['user'])) {
            echo "<a href='./user_login_form.php'><span style='font-size: 12pt;'>Entrar</span></a>";
        } else {
            echo "Olá <strong>" + $_SESSION['nome'] + "</strong>.";
            echo "Sair";
        }  
    ?>
</header>