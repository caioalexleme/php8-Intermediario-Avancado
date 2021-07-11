<?php

// SUBSTR

/*
A função substr (substring) é usada com muita frequencia para capturarmos uma parte de uma string, seja para criar uma nova variável ou simplesmente para apresentar uma parte de uma string. Acontece que esta função tem muito mais nuances do que habitualmente estamos habituados a usar.
*/

$a = 'Esta frase é para testes.';
$b = substr($a, 5, 10); // $b = 'frase é p';

/*
Se verificarmos o que aconteceu, a variável $b ficou apenas com 9 caracteres e não com os 10 á partir da posição 5. Mais uma vez teremos que usar a função multibytes - mb_substr(). Independentemente desse pormenor, as assinaturas são idênticas.
 
A primeira é a string relativamente à qual pretendemos obter uma parte.
A segunda é o índice a partir do qual pretendemos captar uma parte da string.
A terceira define o número de caracteres a capturar a partir do índice.
*/

$c = mb_substr($a, 0, 3);  // 'Est'
$d = mb_substr($a, 10);    // 'é para testes.'

// Se usarmos o índice com o valor negativo, então vamos pedir a função que estraia á partir do fim.

$e = mb_substr($a, -4, 2);  // 'te'
$f = mb_substr($a, -3);     // 'es.'

/*
Podemos usar também o terceiro parâmetro com um valor negativo, Neste caso será captada a parte da stringa partir do índice, mas excluindo o número de caracteres no final equivalente ao valor negativo.
*/

$a = 'abcdefghijklmnop';
$g = substr($a, 8, -3);     //  'ijklm'

/*
Esta função devolve a string, no caso de existir um erro. Antes da versão 8 do PHP, devolvia um valor false no caso de erro. Agora passa a devolver apensa uma string vazia.
 */

$a = 'abc';
$b = substr($a, 5);

// anterior ao PHP 8
echo (int)$b;  // 0 (ou falso)

// com o PHP 8
echo $b;    // ''