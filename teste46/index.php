<?php

// ARRAYS - PUSH, POP, SHIFT, UNSHIFT

/*
Exstem várias funções para manipular a inserção e remoção de valores de um array.
Vejamos alguns exemplos:
*/

$nomes = ['João', 'Ana', 'Carlos'];
$nomes[30] = "Antônio";

// array_push - Permite acrescentar elementos final do array
// array_push($nomes, 'Joaquim');
// array_push($nomes, 'Rui', 'Marco', 'Sandra', 25);
// print_r($nomes);

// array_unshift - Permite adicionar elementos no início do array
// array_unshift($nomes, 'Thiago');
// array_unshift($nomes, 'Teresa', 'Manoel');
// print_r($nomes);

// array_shift - Retira um elemento do início do array;
// array_shift($nomes);
// $valor = array_shift($nomes);    // Neste caso depois de retirar o João. 
// print_r($nomes);                 // Retira a Ana e guarda em $valor 
// echo $valor;

// array_pop - Retira um elemento do final do array;
// array_pop($nomes);
// print_r($nomes);

// Nestas 2 funções, os valores retirados podem ser guardados em variáveis