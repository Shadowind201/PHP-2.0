<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Produtos</h1>

    <div class="produtos">
        <?php
        $produto = ["Achocolatado Pó Nescau Lata 670g", "Desinfetante Pinho Sol Lavanda 1,75l", "Suco Em Pó Trink Uva 15g", "Leite Condensado Moça Integral 395g", "Sabão Líquido Omo Peças Íntimas e Biquínis 300ml", "Sabão Líquido Omo Peças Íntimas e Biquínis 300ml", "Protetor Solar Sundown FPS 30 Praia e Piscina 200ml", "Caixa de Chocolate Lacta Variedades 250,6g", "Caixa de Chocolate Lacta Variedades 250,6g"];
        $valor = ["R$21,42", "R$21,42", "R$ 0,95", "R$ 8,79", "R$ 18,99", "R$ 21,99", "R$ 51,99", "R$ 14,59", "R$2,79"];
        $foto = ["nescau.png", "desinfetante.png", "tang.png", "leite.png", "sabao1.png", "sabao2.png", "protetor.png", "caixa.png", "bolacha.png"];

        $numero_produtos = count($produto);
        $contador = 0;
        while($contador < $numero_produtos){
            echo "<br> $produto[$contador] <br><br>";
            echo "<img src='$foto[$contador]'>";
            echo "<br> $valor[$contador] <br><br>";

            $contador++;
        }
        ?>
</body>
</html>