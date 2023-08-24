<?php

$sinal = $_POST ["sinal"];
$num1 = $_POST ["num1"];
$num2 = $_POST ["num2"];

echo "O calculo de $num1 $sinal $num2 é ";

if ($sinal == "+"){
   echo $num1 + $num2;
}

elseif ($sinal == "-"){
    echo $num1 - $num2;
}

elseif ($sinal == "*"){
    echo $num1 * $num2;
}

elseif ($sinal == "/"){
    echo $num1 / $num2;
}