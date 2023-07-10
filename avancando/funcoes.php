<?php

function sacar(array $conta, float $valorSacar) : array
{
    if ($valorSacar > $conta['saldo']) {
        exibeMensagem('Você não pode sacar');
    }else{
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorDepositar) : array
{
    if($valorDepositar > 0){
        $conta['saldo'] += $valorDepositar;
    } else {
        exibeMensagem( 'Depositos precisam ser positivos!');
    }
    return $conta;
}

// Quando passamos uma variavel por parametro de forma padrão,
// Estamos passando literalmente o seu valor,
// Se quisermos alterar a variavel diretamente
// temos que passar uma referencia de seu endereco na memoria,
// colocando um & antes do parametro
function tornarLetrasMaiusculas(&$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta($conta)
{   
    // função list() que aqui esta abreviada forma variaveis a partir dos campos de um array.
    ['titular' => $titular, 'saldo' => $saldo] = $conta; 

    echo "<li> Titular: {$titular}, Saldo: {$saldo}. </li>";
}