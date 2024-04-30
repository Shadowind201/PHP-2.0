<?php include "cabecalho.php" ?>
<?php include "conexao.php" ?>

<h2>Cadastrar nova tarefa</h2>
<form method="post" action="novo-salvar.php">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" required maxlength="100">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="1"></textarea>
    <button type="submit" class="btn btn-success">Salvar nova tarefa</button>
</form>

<?php include "rodape.php" ?>