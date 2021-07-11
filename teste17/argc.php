<?php

/*

Para além do $argv, que contém a coleção de valores dos parâmetros, existe o $argc que guarda o número de parâmtros passados para o script de PHP.

$argv tem os valores dos parâmetros
$argc guarda a quantidade de parâmetros

*/

# echo $argc;     // php argc.php             // 1
                  // php argc.php 100         // 2


/*
Vamos por exemplo criar um script que guarda num ficheiro valores numéricos aleatórios.

> O nosso script vai aceitar por defeito a criação de um ficheiro com valores.

> Se passarmos um parâmetro vai escrever esse número de valores no novo ficheiro.

> Se passarmos um segundo parâmetro, vamos definir o intervalo de valores a sortear, caso contrário, serão sorteados entre 0 e 100

*/

$vezes = 10;
$min = 0;
$max = 100;

// verifica os argumentos
if($argc == 2)
{
    $vezes = $argv[1];
}
else if($argc == 4)
{
    $vezes = $argv[1];
    $min = $argv[2];
    $max = $argv[3];
}

$file = fopen(time().'txt','w');
for($i = 0; $i < $vezes; $i++)
{
    fwrite($file, rand($min, $max). PHP_EOL);
}
fclose($file);