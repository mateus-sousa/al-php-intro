<?php

for ($contador = 1; $contador <= 15; $contador++) {
    if($contador == 8){
        continue; // O contador continua sem executar as linhas abaixo do comando nessa repetição.
    }
    if($contador == 12){
        break; // Sai do loop sem que a condição inicial seja satisfeita.
    }

    echo "#$contador" . PHP_EOL;
}