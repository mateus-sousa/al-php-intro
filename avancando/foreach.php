<?php

$contasCorrentes = [
    '152.882.141-58' => [
        'titular' => 'Mateus',
        'Saldo' => '2000'
    ],
    '113.788.811-25' => [
        'titular' => 'Thiago',
        'Saldo' => '2500'
    ],
    '123.456.789-10' => [
        'titular' => 'Lucas',
        'Saldo' => '1800'
    ]
];

// Se não informar o indice, o PHP insere o proximo valor numérico.
// Se não reconhecer valor numerico, colocara o primeiro, no caso 0.
$contasCorrentes[] = [
    'titular' => 'Carlos',
    'Saldo' => '5000'
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}