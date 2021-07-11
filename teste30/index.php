<?php

// FILESYSTEM

/*
O PHP permite guardar dados de um array num ficheiro CSV.
Para isso vamos abrir e fechar um ficheiro de forma usual, mas vamos usar a função fputcsv para formatar o nosso array e escrever dentro do ficheiro
*/

$dados = [
    ['João', 'Programados', 47],
    ['Carlos', 'Advogado', 44],
    ['Marta', 'Professora', 29],
    ['Carla', 'Cabeleleira', 41]
];

$f = fopen('dados.csv', 'w');
foreach($dados as $linha){
    fputcsv($f, $linha);
}
fclose($f);

