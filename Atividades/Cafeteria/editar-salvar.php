<?php
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];

    include "conexao.php";

    $sql = "update cardapio set nome = '$nome', tipo = '$tipo', descricao = '$descricao', preco = '$preco', imagem = '$imagem' where id= '$id' ";

    $resultado = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header("location:admin.php");
?>