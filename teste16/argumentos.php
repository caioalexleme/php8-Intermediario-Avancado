<?php

/*
Vimos no vídeo anterior como podemos usar o PHP para executar operações na linha de comando (terminal). Mas será que estamos limitados a executar scripts logo após a instrução PHP? Claro que não.
Podemos passar parâmetros para a execução do script, muito à semelhança do que acontece com a maior parte dos sistemas que funcionam com um CLI.

O caso do Composer, por exemplo, ou o caso do Git.

Como fazemos isso?

php script.php argumento1

Dentro do script PHP podemos captar os argumentos usando o array $argv (podemos designar por argument values).
Trata se de um array no qual o índice 0 guarda sempre o nome do script

php script.php // $argv[0] = script.php

php script.php 100 //$argv[0] = script.php
                   //$argv[1] = 100
------------------------------------------------------------------------------------------------------------------        Podemos então ter algo do gênero:            

*/?>

<?php
// [script.php]
$voltas = isset($argv[1]) ? $argv[1] : 10;
// $voltas será 10 ou o valor de $argv[1]

for($i = 0; $i <= $voltas; $i++){
    echo $i . PHP_EOL;
}

/*
Se executarmos:
php script.php
- Vamos apresentar os valores de 0 a 10 no terminal.

php script.php 100
- vamos apresentar os valores de 0 a 100 no terminal
*/