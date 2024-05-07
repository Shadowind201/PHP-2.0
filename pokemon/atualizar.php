<?php 
include "conexao.php";
$id = $_GET['id'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];

$nomeDoArquivo = $_FILES['foto']['name'];
$partes = explode(".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($partes);
$pasta = "img/";
move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $nomeNovo);

if($nomeArquivo != ""){
    $sql = "update tb_pokemon set nome='$nome', tipo='$tipo', foto='$foto' where id = $id";
}else{
    $sql = "update tb_pokemon set nome='$nome', tipo='$tipo', where id = $id";
}

mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:admin.php')
?>