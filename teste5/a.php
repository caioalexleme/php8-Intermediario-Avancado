<?php

// TRIM
# Remove os espaços e outros carcteres do início e do final de uma string

$a = ' Isto é uma string.   ';

// ------------------------------------
$a = trim($a);      // "Isto é uma string."


// -------------------------------------
$b = trim($a);      // $a = '  Isto é uma string.     '
                    // $b = 'Isto é uma string.'

// --------------------------------------
echo trim($a);      // Apresenta o texo sem espaços no início e no fim.

// -------------------------------------
// ltrim e rtrim
// removem os espaços e outros caracteres do início ou do fim da string

echo ltrim($a);      // "Isto é uma string   "

echo rtrim($a);      // " Isto é uma string."

// --------------------------------------
# Podemos usar um segundo parâmetros nestas funções
$a = 'abcdef';
echo trim($a, 'a');     # "bcdef"
echo trim($a, 'af');    # "bcde"
echo trim($a, 'abef');  # "cd"

// ---------------------------------------
# Por exemplo, apesar de existirem outras fórmulas, podemos "limpar" o $_POST
$usuario = trim($_POST['usuario']);

// Não usem nas senhas. Elas podem conter propositadamente um espaço!