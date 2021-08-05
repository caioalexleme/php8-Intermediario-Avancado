<?php


// ARRAYS - REMOVER REGISTROS DUPLICADOS

/*
Vamos imaginar que nos é enviado uumm ficheiro que contém nomes e carregamos esses nome para um array. Queremos com tudo, remover nomes duplicados. Como fazer?

*/

$nomes = ['João', 'Ana', 'Carlos', 'João',
         'Sara', 'Maria', 'Ana', 'Antônio'];

/*
Poderíamos ir carregando cada um dos nomes para um array e verficando se o nome ja existia no array para não o adicionar. No entanto, existe uma forma mais simples: carregamos todos os nomes e depois vamos usar a função array_unique

*/

$final = array_unique($nomes);

print_r($final);


// Atenção aos resultados algo imprevisíveis

$valores = ['100', '+100', '1000', '0200', '200'];
$final = array_unique($valores, SORT_NUMERIC);
// $final = array_unique($valores, SORT_STRING);
print_r($final);