<?php

// VAMOS FALAR DE ARRAYS

/*
Já falamos anteriormente sobre arrays. São também conhecidos por vetores, pilhas, listas, hashtables, etc.

São coleções ordenadas de dados. Essa ordenação é feita através de chaves que são, na maior parte dos casos, do topo string (arrays associativos) ou do tipo inteiro. Podemos ter, inclusive, arrays multidimensionais.

Tal como acontece com as variáveis string, os arrays têm, no PHP, um conjunto muito extenso de funções para a sua manipulação. Iremos falar apenas das principais para que possamos explorar da melhor forma essas estruturas.

*/

// A definição de um array pode ser feita de várias formas:
$nome1 = array('a', 'b', 'c');
$nome2 = ['a', 'b', 'c'];       // Desde o PHP 5.4
$nome3[] = 'Caio';
print_r($nome3);

$cliente1 = [
    'Nome'=>'Carlos',
    'Idade'=>'35',
    'Profissão'=>'Advogado'
];
print_r($cliente1);
echo $cliente1['Profissão'] . PHP_EOL;

$cliente2['Nome'] = 'Caio';
print_r($cliente2);

