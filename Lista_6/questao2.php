<?php

$n1 = $_POST["n1"];
$i = 1;

if($n1>0){

    echo "Números ímpares no intervalo de 0 a $n1:";
    $i = 0;
    while ($i <= $n1) {
        if (isImpar($i)) {
            echo $i . " ";
        }
        $i++;
    }

} else {
    echo "Por favor, digite um número inteiro estritamente positivo.";

}