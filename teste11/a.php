<?php

// STR_REPLACE

/*
Tal como o nome deixa claro, permite fazer substituição de strings dentro de uma string. Neste caso, substitui todas as ocorrências de uma string que exista dentro de outra string.
Vejamos um exemplo simples.
*/

$a = 'Este texto serve para testar o sistema';
echo str_replace('te', 'TE', $a);

// EsTE TExto serve para TEstar o sisTEma

$b = str_replace(' ', '--->', $a);
// $b = 'Este--->texto--->serve--->para--->testar--->o--->sistema';

// Existe um quarto parâmetro, opcional, que permite definir quantas substituições vão ser feitas. Quando é ignorado, são feitas todas as substituições.

// Vejamos agora outras opções desta função que são muito interessantes.
# Podemos usar arrays nos dois primeiros parâmetros com os seguintes resultados:

$a = 'Este texto serve para testar o sistema';
$vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$b = str_replace($vogais, "", $a);
// $b = 'st txt srv pr tstr sstm';

$a = 'Este jantar está muito bom.';
$original = ['jantar', 'bom'];
$novos = ['almoço', 'mal'];

$final = str_replace($original, $novos, $a);
echo '<br>';
echo $final;    // Este almoço está muito mal.

// NOTA: Existe também a função str_ireplace() que, como o 'i' indica
// executa a mesma operação , mas é case insensitive.