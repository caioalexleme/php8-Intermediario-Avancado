<?php

$valor = 425.7;

// Apesar de existirem outras funções para o efeito, podemos usar o formato para apresentar velores monetários

// echo "O valor total da compra foi de $valor €";
// echo '<br>';
// echo sprintf("O valor total da compra foi de %01.2f €", $valor);

// O %0 define o valor de preenchimento e o valor inteiro imediato a seguir, define a quantidade.
// O . indica a separação para as casa decimais e o 2f determina que devem sempre ser apresentados 2 casa decimais

// ---------------------------------------
// apresentação na consola/terminal
// echo sprintf("%'_20d", $valor);


    $valores = [
        23.35,
        456.258,
        7.1,
        123
    ];

    foreach($valores as $valor){
        echo sprintf("%'.30d", $valor) . PHP_EOL;
    }
    
    foreach($valores as $valor){
        echo sprintf("O preço é:%'.30.2f €", $valor) . PHP_EOL;
    }
