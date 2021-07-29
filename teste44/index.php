<?php

// ARRAYS - CONTAGENS E ÍNDICES

/*
Um dos erros mais comuns, principalmente em iniciantes, é não ter sempre em atenção que os arrays têm um índice de base zero. Isto significa que um array com 3 valores, terá índices entre 0 e 2, sendo o índice 2 o último.
*/

$nomes = ['João', 'Ana', 'Carlos'];

// para contar o número total de valores na pilha, usamos o count()
echo count($nomes);
echo PHP_EOL;

// Se quisermos por algum motivo, apresentar todos os valores num ciclo for, temos que ter em atenção o seguinte
for($i = 0; $i < count($nomes); $i++){
    echo $nomes[$i] . PHP_EOL;
}

echo PHP_EOL;

// A função count tem um segundo argumento que é muito importante para arrays multidimensionais

$empresa = [
    'Administração' => [
        'João',
        'Carlos'
        ],
        'Armazém' => [
            'Antônio',
            'Marco',
            'Luís',
            'Alexandre'
        ]
    ];

    // COUNT_NORMAL (ou 0) é o valor padrão. Se especificarem o valor 1 ou COUNT_RECURSIVE, o count vai contar o número total de elementos dentro do array. Mas atenção a este exemplo
    echo count($empresa, COUNT_NORMAL);
    echo PHP_EOL;
    echo count($empresa, COUNT_RECURSIVE);