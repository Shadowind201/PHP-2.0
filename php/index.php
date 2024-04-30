<h1>Ola, estou aprendendo PHP!</h1>
<p>E que diferença isso vai fazer na minha vida?</p>

<?php
$n1 = 10;
$n2 = 2;

echo $n1;
echo "Esse é o numero 1";

echo "<br>" . $n2 . "<br>";
echo $n1 . " " . $n2 . "<br>";
echo $n1 . " + " . $n2. " = " . ($n1+$n2) . "<br>";
echo $n1 . " - " . $n2. " = " . ($n1-$n2) . "<br>";
echo $n1 . " * " . $n2. " = " . ($n1*$n2) . "<br>";
echo $n1 . " / " . $n2. " = " . ($n1/$n2) . "<br>";

$nome = "Enzo";
$idade = 19;

echo "Olá, eu sou o " . $nome . " e tenho " . $idade . " anos";

$transportes = ["🚗", "✈", "🚂", "🛵"];
$numero = 0;
while($numero <= 3){

    if($numero == 2){
        echo "<br>";
    }else{
        echo $transportes[$numero] . "<br>";
    }
    $numero++;
}

?>