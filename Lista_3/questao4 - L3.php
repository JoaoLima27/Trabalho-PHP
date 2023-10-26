<?php

$masc = $_POST ["masc"];
$fem = $_POST ["fem"];
$apro = $_POST ["apro"];

$total = $masc + $fem;
$totalAproMAS = $masc * 100 / $apro;
$totalAproFEM = $fem * 100 / $apro;

echo "O total de ALUNOS é $total, e os que foram aprovados são $apro<br>";
echo "A porcentagem de alunos MASCULINOS que foram APROVADOS é de $totalAproMAS<br>";
echo "A porcentagem de alunos FEMININOS que foram APROVADOS é de $totalAproFEM<br>";
