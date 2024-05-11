<?php include "cabecalho.php" ?>
<?php include "conexao.php" ?> 

<div class="container align-items-center">
    <form action="atualizar.php" method="post" enctype="multipart/form-data">

        <h1>Altere as informações do Produto</h1>

        <label class="form-label" for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">

        <label class="form-label" for="quantidade">Quantidade</label>
        <input class="form-control" name="quantidade" id="quantidade">

        <label class="form-label" for="nota">Nota</label>
        <textarea class="form-control" name="nota" id="nota" cols="30" rows="3"></textarea>
        <br>
        <button class="btn btn-success" type="submit">Salvar</button>

    </form>
</div>

<?php include "rodape.php" ?>