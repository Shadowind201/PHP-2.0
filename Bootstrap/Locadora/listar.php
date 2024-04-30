<?php 
    $nomearquivo = "clientes.txt";
    $arquivo = fopen($nomearquivo,"r");
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>Nome</td>";
    echo "<td>E-mail</td>";
    echo "</tr>";
    while(!feof($arquivo)){
        $linha = fgets($arquivo, 1000);
        if($linha != ""){
            $conteudo = explode(";",$linha);
            echo "<tr>";
            echo "<td>$conteudo[0]</td>";
            echo "<td>$conteudo[1]</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    fclose($arquivo);
?>