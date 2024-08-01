<header>
    <h1 id="logo">Bluezão Jogos</h1>
    <?php
        if (empty($_SESSION['user'])) {
            echo "<span style='font-size: 12pt;'>Entrar</span>";
        } else {
            echo "Olá <strong>" + $_SESSION['nome'] + "</strong>.";
            echo "Sair";
        }  
    ?>
</header>