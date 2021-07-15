<?php

// DATETIME - criar uma data a partir de um formato
/*
    Vamos imaginar que nos é dado uma lista de datas com um determinado formato e que queremos "assimilar" essas datas para uma estrutura DateTime.

    Neste caso podemos usar o método estático createFromFormat
*/

$datas = [
    '21-10-1998',
    '12-09-1996',
    '01-07-2001',
    '08-12-2005',
    '22-11-1987'
];

foreach($datas as $data){
    $d = DateTime::createFromFormat('d-m-Y', $data);
    $d->add(new DateInterval('P180D'));
    echo $d->format('Y-m-d') . PHP_EOL;
}


// Testando e comprovando que a função reconhece ano bissexto seguindo a regra.
$da = new DateTime('26-02-2096');
$da->add(new DateInterval('P3D'));
echo $da->format('d-m-Y');