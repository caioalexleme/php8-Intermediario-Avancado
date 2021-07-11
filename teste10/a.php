<?php


# EXPLODE e IMPLODE

/*
A utilização de arrays como coleções de dados e algo praticamente presente em todas as aplicações de PHP. Existem funções de strings também relacionadas com arrays, e estas duas são um exemplo disso
*/

// ----------------------------------------
// EXPLODE
/*
Permite tranformar uma string num array de strings, recorrendo a um carater de separação
*/

$str_nomes = 'joao,carlos,ana,antónio';
$nomes = explode(',', $str_nomes);

// $nomes = ['joao', 'carlos', 'ana', 'antónio'];

/*
Existe um terceiro parâmetro que, sendo usado, define a quantidade máxima de elementos que o array $nomes va ter. Não sendo especificado, $nomes vai conter o número máximo de parâmetros possível.
*/

$nomes = explode(',', $str_nomes, 2);
// $nomes = ['joao', 'carlos,ana,antónio'];

// Se o caracter de separação for vazio, a função retorna false

//--------------------------------------------------------

# IMPLODE

/*
Permite "colar" numa string um conjunto de elementos de um array.
Para isso usa um caracter de "colagem". Vejamos o exemplo
*/

$nomes = ['João', 'Carlos', 'Ana', 'Antônio'];
$str_nomes = implode('|', $nomes);

// $str_nomes = 'João|Carlos|Ana|Antônio';

/*
Em versões anteriores ao PHP 8, podíamos passar o caracter de colagem depois do array (como segundo argumento). A partir do PHP 8 não é permitido usar outra assinatura que não seja esta:
caracter de colagem e array de valores a colar

NOTA: Existe uma outra função que é um alias do implode. É a função join(), tem exatamente a mesma assinatura e finalidade do implode.
*/