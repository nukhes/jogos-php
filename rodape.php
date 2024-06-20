<?php
    echo "<footer>";
    echo "<p>Acessado por ". $_SERVER['REMOTE_ADDR']. " em " .date('d/m/y')." </p>";
    echo "<p>Desenvolvido por Rad e Pedro &copy; 2024</p>";
    echo "</footer>";
    $banco->close();
?>