<?php

$salario = $_POST ["salario"];
$desconto = $salario / 0.08;
$desconto = number_format($desconto, 2);
$liquido = $salario - $desconto;
$liquido = number_format($liquido, 2);

echo "O salário BRUTO do Funcionario é $salario, com o desconto de $desconto desse salário, o funcionario receberá $liquido";

