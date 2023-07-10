<?php

$altura = 1.85;
$peso = 90;

$imc = $peso / $altura**2;

echo "Seu IMC é $imc e você está ";

if($imc < 18.5){
    echo "abaixo do peso.";
}elseif ($imc >= 18.5 && $imc < 25){
    echo "no peso ideal.";
}elseif ($imc >= 25 && $imc < 30){
    echo "acima do peso.";
}elseif ($imc >= 30 && $imc < 40){
    echo "obeso.";
}elseif ($imc >= 40){
    echo "gravemente obeso.";
}