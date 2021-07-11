<?php

// DATETIME

/*
A classe Datetime foi introuzida no PHP 5.2 e é, atualmente, a melhor opção para utilização e manipulação de datas no PHP.
Com esta classe podemos executar praticamente todo tipo de operações com datas e horas, efetuando cálculos e apresentando os valores em vários formatos.
*/

$agora = new DateTime();
echo $agora->format('d-m-Y H:i:s');
echo PHP_EOL;
