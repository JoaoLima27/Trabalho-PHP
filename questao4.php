<?php

$num1 = $_POST ["num1"];


if ($num1 >= 100.00){
    $desconto1 = $num1 / 0.10;
    $final1 = $num1 + $desconto1;
   echo "O desconto do produto de preço $num1, tem o desconto de $desconto1. O preço final a se pagar é $final1";
}

elseif ($num1 < 100.00) {
    $desconto2 = $num1 / 0.5;
    $final2 = $num1 + $desconto2;

   echo "O produto escolhido com o seu devido preço é: $num1, tem o desconto de: $desconto2. O preço final a se pagar é: $final2";
}
