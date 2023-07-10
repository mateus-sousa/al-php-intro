<?php
/*
 * Diferença entre função e subrotina.
 * A chamada de uma função no código passa a representar o valor que ela retorna.
 * Com isso, podemos atribuir o retorno de uma função a uma variável, por exemplo, ou até mesmo exibí-lo.
 * Já uma subrotina apenas executa um código de forma isolada, sem retornar nenhum valor.
 */

//Se o include não conseguir buscar o arquivo ele dispara um warning e continua a execução do codigo, 
// já o require para a execução do codigo com um erro fatal.
require_once 'funcoes.php';

$contasCorrentes = [
    '152.882.141-58' => [
        'titular' => 'Mateus',
        'saldo' => '200'
    ],
    '113.788.811-25' => [
        'titular' => 'Thiago',
        'saldo' => '2500'
    ],
    '123.456.789-10' => [
        'titular' => 'Lucas',
        'saldo' => '1800'
    ]
];

tornarLetrasMaiusculas($contasCorrentes['152.882.141-58']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?=$conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?=$conta['saldo']; ?>
        </dd>
        <?php }?>
    </dl>
</body>
</html>