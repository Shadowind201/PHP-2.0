<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Campeonato paulista</header>
    <h1>Times</h1>
    <div class="times">
        <?php
        $times = ["São Paulo FC","Palmeiras","Santos FC","Corinthians","Red Bull Bragantino","Mirassol","Ituano","Novorizontino", "Botafogo-SP", "Guarani", "Ponte Preta", "São Caetano", "Santo André", "Inter de Limeira", "São Bento", ];
        $escudos = ["saocaetano.png", "bragantino.png", "campinas.png", "corintias.png", "curintias.png", "gremio.png", "internacional.png", "ituano.png", "mirassol.png", "palmeiras.png", "santos_andre.png", "santos.png", "sorocaba.png", "spfc.png"];

        $numero_times = count($times);
        $contador = 0;
        while($contador < $numero_times){
            echo "<img src='$escudos[$contador]'>";
            echo "<br> $times[$contador] <br><br>";

            $contador++;
        }
        ?>

    </div>
</body>
</html>