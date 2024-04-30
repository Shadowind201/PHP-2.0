<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de filmes</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jogos 🎮</h1>
    <?php
        $banners = ["banner01.jpg", "banner02.jpg", "banner03.jpg", "banner04.jpg"];
        $sorteio = rand(0,4);
        echo "<img src='$banners[$sorteio]' class='imagem-banner'>";
    ?>
    <div class="lista">
        <?php
        $jogos = ["Death Stranding", " Astroneer", "Helldivers 2", "Dead Space 2", "The isle", "Minecraft"];
        $capas = ["death_stranding.jpg", "astroneer.jpg", "helldivers2.jpg", "dead_space2.jpg", "the_isle.jpg", "minecraft.jpg"];

        $numero_jogos = count($jogos);
        $contador = 0;
        while($contador < $numero_jogos){
            echo "<img src='$capas[$contador]'>";
            echo "<br> $jogos[$contador] <br><br>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>