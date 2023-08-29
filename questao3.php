<?php

$num1 = $_POST ["num1"];

if ($num1 > 0){
   echo "O número é POSITIVO!!!";
}

elseif ($num1 == 0) {
    echo "O Número é ZERO!!!";
}

else {
    echo "O Número é NEGATIVO!!!";
}