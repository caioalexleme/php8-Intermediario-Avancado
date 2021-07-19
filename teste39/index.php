<?php

// DATETIME - Outra forma ainda de manipular a data e hora

/*
Existe ainda outra forma muito interessante de manipular um DateTime.
Vimos que podemos usar o Add e Sub para adicionar ou remover períodos de tempo, mas existe ainda o método Modify.

Vejamos alguns exemplos.
*/

$brasil = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;

// adicionar um minuto
// $brasil->modify('+1 minute');             // adicionar 1 minuto
// $brasil->modify('+15 minutes');           // adicionar 15 minutos
// $brasil->modify('+48 hours');             // adicionar 48 horas
// $brasil->modify('+1 day');                // adicionar 1 dia
// $brasil->modify('+7 days');               // adicionar 7 dias
// $brasil->modify('+3 months');             // adicionar 3 meses
// $brasil->modify('+12 years');             // adicionar 12 anos
// $brasil->modify('+1 year +6 months');     // adicionar 1 ano e 6 meses
// $brasil->modify('+1 hour +15 minutes');   // adicionar 1 hora e 15 minutos
// $brasil->modify('-1 hour -15 minutes');   // retirar 1 hora e 15 minutos
// $brasil->modify('-1 year -15 seconds');   // retirar 1 ano e 15 segundos

echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;