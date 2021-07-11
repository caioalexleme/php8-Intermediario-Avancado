<?php


# MAIÚSCULAS E MINÚSCULAS

// O PHP contém algumas funções para transformar as strings
$a = 'joao ribeiro';
$b = 'ANA CAROLINA';
$c = 'Francisco Santos';

// -------------------------------
// strtoupper - transforma uma string para maiúsculas

echo strtoupper($a);    // JOAO RIBEIRO
echo strtolower($c);    // FRANCISCO SANTOS

$a = 'João Luís';

echo strtoupper($a);    // JOãO LUíS
echo mb_strtoupper($a); // JOÃO LUÍS

// As funções mb_ são designadas por funções multibyte e estão relacionadas com os sistemas de codificação de caracteres.
// É necessário ter ativo o módulo mbstring.

// ---------------------------------------
// strtolower - transforma uma string em minúsculas
echo strtolower($b);    // ana carolina
echo strtolower($c);    // francisco santos

// De igual modo, existe a função mb_strtolower() para resolver as questões dos caracteres acentuados

echo ucfirst('joão luis');  // João luís
echo ucfirst('índice');     // índice

// -------------------------------------
// lcfirst - transforma a primeira letra de uma string em letra minúscula
echo lcfirst('João Ribeiro');   // joão Ribeiro

// -------------------------------
// ucwords - transforma todas as primeira letras de cada palavra numa string em maiúsculas.
echo ucwords('joão ribeiro');   // João Ribeiro