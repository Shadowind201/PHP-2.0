<?php
    $tipo = $_POST["tipo"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    include "conexao.php";
    
    $sql = "insert into cardapio(tipo, nome, descricao, preco, imagem) values('$tipo', '$nome', '$descricao', '$preco', '$imagem')";

    $resultado = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header("location:index.html");
?>