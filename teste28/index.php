<?php

//FILESYSTEM

/*
Na leitura de ficheiros de texto, o PHP contém nativamente algumas funções para carregar informação a partir de ficheiros CSV

Um ficheiro CSV (Comma Separated Values), permite guardar dados em esquema de tabela.
É muito utilizado na exportação de dados a partir do Excel e de outras aplicações desktop e web. O ficheiro pode conter vários formatos diferentes (dados separados por vírgulas, ponto e vírgula, delimitado por aspas, etc.)

Vejamos um exemplo:

*/

$file = fopen('dados.csv', 'r');
$max_lines = 2;
while (!feof($file)) {
    $l = fgetcsv($file);
    print_r($l);
    if ($max_lines-- == 0){
        die('terminado');
    }
}
fclose($file);