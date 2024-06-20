<?php
    function thumb($arquivo) {

        $caminho = "fotos/$arquivo";

        if (is_null($arquivo) || !file_exists($caminho)) {
            $caminho = "fotos/indisponivel.png";
        }

        //$caminho = (is_null($arquivo) || !file_exists($caminho)) ? "fotos/indisponivel.png" : "fotos/$arquivo";

        return $caminho;
    }
?>