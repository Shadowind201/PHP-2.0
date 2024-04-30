<?php

$usuario = $_POST["usuario"];

echo $usuario;

$arquivo = fopen("clientes.txt","a");
fwrite($arquivo, $usuario . "\n");
fclose($arquivo);

?>