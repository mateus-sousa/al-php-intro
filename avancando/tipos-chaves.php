<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

// o php vai converter todos os indices acima em 1 e sobreescrever, mostrando assim só o ultimo valor atribuido

foreach ($array as $item){
    echo $item . PHP_EOL;
}