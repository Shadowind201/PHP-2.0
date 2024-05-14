<?php

$id = $_GET['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$nota = $_POST['nota'];

include "conexao.php";

$sql = "insert into tb_lista(nome, quantidade, nota) values('$nome', '$quantidade', '$nota')";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:visualizacao.php")
?>