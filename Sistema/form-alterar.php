<?php 
include "cabecalho.php";
include "conexao.php";
?> 

<div class="container align-items-center">

<?php 
    $id = $_GET['id']; 
?>

    <form action="atualizar.php?id=<?=$id?>" method="post" enctype="multipart/form-data">

        <?php

            $nome = "";
            $quantidade = "";
            $nota = "";

            $sql = "select * from tb_lista where id = $id";
            $resultado = mysqli_query($conexao, $sql);
            while($umProduto = mysqli_fetch_assoc($resultado)){
                $nome = $umProduto['nome'];
                $quantidade = $umProduto['quantidade'];
                $nota = $umProduto['nota'];
            }
        ?>
        <h1>Altere as informações do Produto</h1>

        <label class="form-label" for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome" value="<?=$nome?>">

        <label class="form-label" for="quantidade">Quantidade</label>
        <input class="form-control" name="quantidade" id="quantidade" value="<?=$quantidade?>">

        <label class="form-label" for="nota">Nota</label>
        <input class="form-control" name="nota" id="nota" cols="30" rows="3" value="<?=$nota?>"></input>
        <br>
        <button class="btn btn-success" type="submit">Salvar Alteração</button>

    </form>
</div>

<?php include "rodape.php" ?>