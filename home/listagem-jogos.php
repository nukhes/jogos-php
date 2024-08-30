<table class="listagem">
    <?php
        //alterar a query para join
        $q="select j.cod, j.nome, j.capa, g.genero, p.produtora from jogos j join generos g on j.genero=g.cod join produtoras p on j.produtora=p.cod ";

        if(!empty($chave)){
            $q .="where j.nome like '%$chave%' or p.produtora like '%$chave%' or g.genero like '%$chave%' ";
        }
        
        switch ($ordem){
            case "p":
                $q .="order by p.produtora";
                break;
            case "n1":
                $q .="order by j.nota desc";
                break;
            case "n2":
                $q .="order by j.nota asc";
                break;
            case "g":
                $q .="order by j.genero";
                break;
            default:
                $q .="order by j.nome";
        }           

        $busca = $banco->query($q);
        if (!$busca) {
            echo "<tr><td>A busca falhou!";
        } else {
            if ($busca->num_rows==0) {
                echo "<tr><td>Nenhum jogo foi encontrado!";
            } else {
                while($reg=$busca->fetch_object()) {
                    $t = thumb($reg->capa);
                    echo "<tr><td><img src='$t' class='mini'/>";
                    echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a>";
                    echo "<span class='genero'>$reg->genero</span><br>";
                    echo "<span class='produtora'>$reg->produtora</span>";
                    echo "<td>Admin";
                }
            }
        }
    ?>
</table>