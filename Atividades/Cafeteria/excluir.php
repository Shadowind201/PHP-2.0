<?php

$id = $_GET['id'];
include "conexao.php";
$sql = "Delete from cardapio where id = $id";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('location: admin.php')

?>