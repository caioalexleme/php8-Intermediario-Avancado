<?php

// STRIPOS E STRRIPOS

/*
Com a função strpos e strrpos vamos buscar a posição de uma needle dentro de uma haystack. No caso dessas funções, elas são case sensitives (São sensíveis a maiúsculas e minúsculas)

Se pretendemos fazer a mesma pesquisa, mas por case insensitive, usamos as funções stripos e strripos
*/

$a = 'Este quarto Tem luz';
$pos = strpos($a, 'T');     // 12

$pos = stripos($a, 'T');    //  2

/*
IMPORTANTE: à semelhança das funções strpos e strrpos, estas também tem a sua versão multibytes para caracteres acentuados
mb_stripos() e mb_strripos()
*/