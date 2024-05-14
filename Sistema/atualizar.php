<?php

$id = $_GET['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$nota = $_POST['nota'];

include "conexao.php";

$sql = "update tb_lista set nome = '$nome', quantidade = '$quantidade', nota = '$nota' where id= '$id' ";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:visualizacao.php")
?>