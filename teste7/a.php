<?php

# COMO CONTAR O NÚMERO DE CARACTERES DE UMA STRING

/*
Muitas vezes vamos necessitar calcular o número de caracteres de uma string.
Com muita frequência recorremos rapidamente ao uso da função strlen
*/

$a = 'Uma frase para testes.';

$comprimento = strlen($a);  // $comprimento = 22

echo strlen($a);    // 22

// ---------------------------------
// Quando uma variável é nula ou vazia;
$b = null;
$c = '';

echo strlen($b);    // 0
echo strlen($c);    // 0

// --------------------------------------
// Quando uma variável é boleana
$sim = true;
$nao = false;
echo strlen($sim);  //  1
echo strlen($nao);  //  0

// --------------------
// Quando uma variável é numérica
$numero = 1250;
echo strlen($numero);   //  4 (conversão implícita)

// --------------------------
// Quando uma variável é um array
$nomes = ['Ana', 'Carlos', 'Miguel'];
echo strlen($nomes);    // gera um erro. Não pode ser usada com arrays. Só com strings.

// --------------------------------------
// problema! Caracteres com acento
$f = 'João Ribeiro';
echo strlen($f);    // vai apresentar o valor 13, ainda que só existam 12 caracteres

// solução
echo mb_strlen($f); // 12