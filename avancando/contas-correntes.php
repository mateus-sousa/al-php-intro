<?php

$conta1 = [
    'titular' => 'Mateus',
    'Saldo' => '2000'
];
$conta2 = [
    'titular' => 'Thiago',
    'Saldo' => '2500'
];
$conta3 = [
    'titular' => 'Lucas',
    'Saldo' => '1800'
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
