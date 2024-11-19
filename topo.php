<header>
    <h1 id="logo">DSJogos</h1>
    <?php
        if (empty($_SESSION['user'])) {
            echo "<a href='./user_login_form.php'><span style='font-size: 12pt;'>Entrar</span></a>";
        } else {
            echo "
            <div style='display: flex; align-items: center; gap: 20px;'>
                <span>Olá <strong>" . "<a href='./user_edit.php'>" . $_SESSION['nome'] . "</a>" . "</strong> </span>
                <form method='post'>
                    <button type='submit' name='logout'>Sair</button>
                </form>
            </div>";
        }  
    ?>


    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['logout'])) {
        $_SESSION = [];
        session_destroy();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        header("Location: index.php");
        exit;
    }
    ?>
</header>
