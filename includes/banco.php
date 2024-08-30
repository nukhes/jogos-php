<?php
    /*
    Instância do banco de dados.
    $banco = new mysqli(host, usuario, senha, banco);
    */
    $banco = new mysqli("127.0.0.1", "root", "", "bd1_games");

    // Caso o banco caia
    if ($banco->connect_errno) {
        echo "</p>O BD esá fora do ar! $hanco->errno-->$banco->connect_error</p>";
        die();
    }

    // Transformar os resultados com padrões utf8
    $banco-> query("SET NAMES 'utf8'");
    $banco-> query("SET character_set_connection=utf8");
    $banco-> query("SET character_set_client=utf8");
    $banco-> query("SET character_set_results=utf8");
?>