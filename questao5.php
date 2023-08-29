<?php

$nota1 = $_POST ["nota1"];
$nota2 = $_POST ["nota2"];
$nota3 = $_POST ["nota3"];
$media = $nota1 + $nota2 + $nota3 / 3;

if ($media >= 7){
   echo "PARABENS, VOCE FOI APROVADO!!";
}

elseif ($media >= 4 and $media <= 7) {

   echo "OLHA, VOCE ESTA DE RECUPERAÇÃO";
}

else {
    echo "QUE PENA, VOCE ESTA DE REPROVADO :(";
 }
