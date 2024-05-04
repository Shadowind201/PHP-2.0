<?php include "cabecalho.php" ?>

    <h2>Cadastrar um novo Pokemon</h2>
    <form method="post" action="salvar.php" enctype="multipart/form-data">
        <br>
        <input type="text" name="nome" placeholder="Nome" class="form-control">
        <br>
        <p>Tipo:</p>
        <input type="radio" name="tipo" value="Normal" class="form-check-input"> Normal
        <input type="radio" name="tipo" value="Fogo" class="form-check-input"> Fogo
        <input type="radio" name="tipo" value="Água" class="form-check-input"> Água 
        <input type="radio" name="tipo" value="Grama" class="form-check-input"> Grama
        <input type="radio" name="tipo" value="Voador" class="form-check-input"> Voador
        <br><br>
        Foto: <input type="file" name="foto" class="form-control">
        <br>
        <button class="btn btn-primary" type="submit">Salvar Pokemon</button>
    </form>

<?php include "rodape.php" ?>