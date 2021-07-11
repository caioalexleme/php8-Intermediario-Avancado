<?php

// STRPOS - permite encontrar a posição (índice) da primeira ocorrência de uma string dentro de outra string

$a = 'Esta frase serve para testes';
$pos = strpos($a, 'se');    // 8

/*
A Haystack é a string onde vamos procurar a posição.
A Needle é a string cuja posição pretendemos obter dentro da string
Offet é um parâmetro opcional que permite definir a partir de onde é efetuada a pesquisa
*/

//              111111111
//    0123456789012345678
$a = 'Esta frase serve para testes';
$pos = strpos($a, 'se', 10);    //  11

/*
Com o PHP 8 houve alterações na forma como definimos a needle.
Antes do PHP 7.3, podíamos passar uma needle que não fosse string.
Era efetuada uma conversão implícita da needle para string
*/

$a = 'Esta frase 100 serve para testes';
$pos = strpos($a, 100);     // 11

/*
Com o PHP 7.3, essa possibilidade foi descontinuada, apresentando um aviso.
Com o PHP 8.0 deixou de poder ser usada uma needle que não seja string.
Temos que fazer uma conversão explícita.
*/

$a = 'Esta frase 100 serve para testes';
$pos = strpos($a, (string)100);

// IMPORTANTE: Para situações onde temos strings com caracteres acentuados devemos usar a instrução mb_strpos()

// Se não for encontrada a ocorrência, devolve false como resultado

/*
Neste caso, temos o problema de termos um resultado zero (0) ou um resultado false (0)
Como vamos resolver? É aconselhável usar o operador === quando testamos o resultado desta função
*/

$a = 'Esta frase serve para testes';
if(mb_strpos($a, 'abc') === false){
    echo 'não existe';
}else{
    echo 'Existe';
}