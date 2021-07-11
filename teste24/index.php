<?php

// FILESYSTEM

# Vamos aprender a escrever um valor em cada linha do nossso ficheiro
# Isso irá permitir, quando quisermos ler cada uma das nossas frases, ler uma a uma.

$ficheiro = fopen('dados.txt', 'a');
for($i = 1; $i <= 10; $i++){
    fwrite($ficheiro, 'Esta linha contém o valor ' . rand(0, 100) . PHP_EOL);
}

fclose($ficheiro);