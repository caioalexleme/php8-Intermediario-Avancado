<?php

// DATETIME

/*
A partir do momento em que definimos uma data (e podemos fazê-lo no construtor da clase DateTime), podemos tirar partido de vários métodos para operar os valores. Uma data e hora contém imensos parâmetros: ano, mês, dia, dia da semana, hora, minuto segundo etc.
Existem vários métodos para alterar os valores da data e hora, adicionando períodos de tempo.
Vejamos.

*/

$data = new DateTime();
$data->setTime(0, 0);
$data->setDate(2000, 1, 1);
echo $data->format('d-m-Y H:i:s');