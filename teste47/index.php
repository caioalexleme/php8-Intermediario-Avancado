<?php

// ARRAYS - KEY_EXISTS e iN_ARRAY

/*
Quando queremos verificar se um array ou uma determinada chave existe dentro de um array, não temos que o percorrer até encontrar o que desejamos.
*/

// key_exists - "pergunta" ao array se ele tem uma determinada chave (key)
$empresa = [
    'Administrador' => 'João',
    'Secretária' => 'Ana',
    'Contabilista' => 'Carlos'
];

if(key_exists('Operário', $empresa)){
    echo 'Existe';
}else{
    echo 'Não existe';
}

// in_array - verifica se determinado valor existe no array ou não
// if(in_array('Ana', $empresa)){
//     echo 'O valor existe';
// }else{
//     echo 'O valor não existe';
// }
