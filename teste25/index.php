<?php

// FILESYSTEM

// Vamos aprender a ler dados de um ficheiro, neste caso, linha a linha

// Leitura dos dados


$ficheiro = fopen('dados.txt', 'r');
for($i = 1; $i <= 10; $i++){
    echo fgets($ficheiro);
}

fclose($ficheiro);
//----------------------------

# Caso não saibamos o número de linhas no ficheiro, podemos criar uma expressão while:
$ficheiro = fopen('dados.txt', 'r');
while(feof($ficheiro) == false){    // Enquanto o fim do ficheiro(feof) for false, escreva cada linha no terminal
    echo fgets($ficheiro);
}

fclose($ficheiro);

// Mesmo resultado de cima, repare que a lógica é a mesma
$ficheiro = fopen('dados.txt', 'r');
while(!feof($ficheiro)){    // Enquanto o fim do ficheiro(feof) for false, escreva cada linha no terminal
    echo fgets($ficheiro);
}

fclose($ficheiro);