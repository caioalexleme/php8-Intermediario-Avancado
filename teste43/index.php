<?php

// LIST E EXTRACT - TRANSFORMAR UM ARRAY EM VÁRIAS VARIÁVEIS

/*
É possível transformar os valores de uma array, cada um para uma variável específica. Utilizamos para isto a fução list()
*/

$nomes = ['João', 'Ana', 'Carlos'];
list($nome1, $nome2, $nome3) = $nomes;

echo $nome1 . PHP_EOL;
echo $nome2 . PHP_EOL;
echo $nome3 . PHP_EOL;

// Se quisermos apenas alguns elementos:

list($nome1,,$nome2) = $nomes;
echo $nome1 . PHP_EOL;
echo $nome2 . PHP_EOL;

// Podemos ainda usar o extract para, automaticamente, cada valor passar para uma variável com o nome da chave

$funcionarios = [
    'administrador' => 'João',
    'secretaria' => 'Ana',
    'contabilista' => 'Carlos'
];

extract($funcionarios);
echo $administrador . PHP_EOL;
echo $secretaria . PHP_EOL;
echo $contabilista . PHP_EOL;

// IMPORTANTE: Não devemos usar o extract com arrays que não controlamos
// como por exemplo os dados da superglobal $_POST[] quando fazemos a
// submissão de um formulário