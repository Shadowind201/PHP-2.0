<?php 

$id = $_GET['id'];

include "conexao.php";

$sql = "update tb_lista set status = 1 where id= '$id' ";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:visualizacao.php")

?>