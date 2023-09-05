<?php

$peso = $_POST ["peso"];
$altura = $_POST ["altura"];
$IMC = $peso / ($altura * $altura);
$IMC = number_format($IMC, 2);

echo "Seu IMC é $IMC<br>";

if ($IMC < 18.5){
    echo "Baixo Peso";
}

elseif ($IMC >= 18.5 and $IMC < 25){
    echo "Peso Adequado";
}

elseif ($IMC >= 25 and $IMC < 30){
    echo "Sobrepeso";
}

else{
    echo "Obesidade";
}
