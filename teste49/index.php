<?php

// ARRAYS - APROVEITAR PARA MISTURAR

/*
Imaginemos um cenário em que temos perguntas de resposta múltipla.
Queremos que as respostas apareçam sempre numa posição diferente.
Não interessa por agora como seria o tempo de resposta. Apenas queremos perceber como podemos facilmente apresentar essas respostas por ordem aleatória

*/

$questao = 'Qual é a capital de Portugal? ';
$respostas = [
    'Lisboa',
    'Porto',
    'Coimbra'
];

shuffle($respostas);
print $questao . PHP_EOL;

foreach($respostas as $resposta)
    echo "> $resposta". PHP_EOL;

