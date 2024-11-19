<?php
    function thumb($arquivo) {

        $caminho = "fotos/$arquivo";

        if (is_null($arquivo) || !file_exists($caminho)) {
            $caminho = "fotos/indisponivel.png";
        }

        //$caminho = (is_null($arquivo) || !file_exists($caminho)) ? "fotos/indisponivel.png" : "fotos/$arquivo";

        return $caminho;
    }

    class Mensagem {
        static function voltar() { 
            $resp = "<a class='voltar mensagem' style='text-decoration: none; color: black;' href='./index.php'><img src='./icones/lucide/arrow-left.png' alt='Voltar'/>Voltar</a>";
            return $resp;
        }
        static function sucesso($m) {
            $resp = "<div class='sucesso mensagem'><img src='./icones/lucide/check.png' alt='Sucesso'/> $m</div>";
            return $resp;
        }
        static function aviso($m) {
            $resp = "<div class='aviso mensagem'><img src='./icones/lucide/triangle-alert.png' alt='Aviso'/> <div>$m</div> </div>";
            return $resp;
        }
        static function erro($m) {
            $resp = "<div class='erro mensagem'><img src='./icones/lucide/circle-x.png' alt='Erro'/> $m</div>";
            return $resp;
        }
    }

?>