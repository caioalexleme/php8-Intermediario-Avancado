<?php

// FILESYSTEM

/*
    Podemos carregar todos os dados de um ficheiro de texto para um array diretamente usando a função file(). Vamos ver um exemplo:

*/

$paises = file('paises.txt', FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);
print_r($paises);

/*
Utilizando Flags:
FILE_SKIP_EMPTY_LINES - ignora as linhas sem conteúdo
FILE_IGNOTE_NEW_LINES - Organiza os itens sem quebra de linha
*/