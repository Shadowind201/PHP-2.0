<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="stylesheet" href="style.css">
    
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

    

    <title>Pokedex</title>
</head>
<body>
    
    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? 1;
    $proximo = $id + 1;
    $anterior = $id - 1;
    if($anterior < 1){
        $anterior = 1;
    }
    $nome = "nome do pokemon";
    $foto = "foto do pokemon";

    $sql = "select * from tb_pokemon where id = $id";
    $resultado = mysqli_query($conexao, $sql);
    while($umPokemon = mysqli_fetch_assoc($resultado)):
        $nome = $umPokemon['nome'];
        $foto = $umPokemon['foto'];
    endwhile;
    ?>

    <main>
        
        <img src="img/<?=$foto;?>" alt="<?=$foto;?>" class="pokemon_image">
            
        <h1 class="pokemon_data">
            <span class="pokemon_number"></span><?=$id;?> -
            <span class="pokemon_name"><?=$nome;?></span>
        </h1>

        <!-- <form>
            <input type="search"
            class="input_search"
            placeholder="Name or Number"
            required>
        </form> -->

        <div class="buttons">
            <a href="index.php?id=<?=$anterior?>" class="button btn-prev">&lt; Prev </a>
            <a href="index.php?id=<?=$proximo?>" class="button btn-next">Next &gt;</a>
        </div>
        
        <img src="img/pokedex.png" alt="pokedex" class="pokedex">
    </main>

</body>
</html>