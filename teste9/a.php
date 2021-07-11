<?php

/*
Nas regras de negócio do nosso código vamos necessitar usar funções que permitem verificar qual o conteúdo de uma string.
Se contém outra string, se começa pela letra x, termina com y, ou quantas letras 'A'

O PHP oferece várias funções para essa finalidade
*/

$a = 'Esta frase é usada para testes.';

// str_contains - Verifica se uma string existe dentro da outra -  Retorna true ou false

//------------------

$b = 'para';
if (str_contains($a, $b)){
    echo 'Sim';     // <============
}else{
    echo 'Não';
}

echo '<br>';

// ------------------------------
$c = 'USA';
if(str_contains($a, $c)){
    echo 'Sim';
}else{
    echo 'Não';     // <===========
}

echo '<br>';
// --------------------------------------
$c = 'ua';
if(str_contains($a, $c)){
    echo 'Sim';
}else{
    echo 'Não';     // <================
}

// Para percebermos se uma string começa ou acaba com uma determinada string usamos as funções:
// str_ends_with() e str_starts_with()
// São ambas case sensitive

echo '<br>';
$a = 'Esta frase é usada para testes.';

if(str_starts_with($a, 'E')){
    echo "Sim";     // <============
}else{
    echo 'Não';
}
// ----------------------------------
echo '<br>';
$a = 'Esta frase é usada para testes.';

if(str_ends_with($a, 'tes.')){
    echo "Sim";     // <=============
}else{
    echo 'Não';
}

// Estas funções são destinadas cada uma à sua função específica.
// Contudo, existe uma função que "unifica" todas estas: preg_match()
// Uma vez que recorre ao uso de expressões regulares, veremos em vídeos específicos sobre expressões regulares, como alcançar os mesmos resultados.