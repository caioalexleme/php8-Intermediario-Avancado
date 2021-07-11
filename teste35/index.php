<?php

// DATETIME - add e sub
/*
Podemos adicionar e subtrair períodos de tempo a uma data
Para isso usamos o método ADD e SUB

DateInterval:
P - Período - D = Dia(Day), W = Semana(Week), M = Dês(Month), Y = Ano(year))
PT - Período de tempo - H = Hora, M = Minuto, S = Segundo
*/

$data = new DateTime('01-01-2000 00:00:00');

// $data->add(new DateInterval('P180D'));         // Adiciona 180 dias
// $data->add(new DateInterval('P12W'));          // Adiciona 12 semanas
// $data->add(new DateInterval('P11M'));          // Adiciona 11 meses
// $data->add(new DateInterval('P2Y'));           // Adiciona 2 anos
// $data->sub(new DateInterval('P180D'));         // Subtrai 180 dias
// $data->sub(new DateInterval('P12W'));          // Subtrai 12 semanas
// $data->add(new DateInterval('P1Y1M1W1D'));     // Adiciona 1 ano, 1 mês, 1 semana e 1 dia

// $data->add(new DateInterval('PT72H'));         // Adiciona 72 horas
// $data->sub(new DateInterval('PT72H'));         // Subtrai 72 horas
// $data->sub(new DateInterval('PT72M'));         // Subtrai 72 minutos
// $data->sub(new DateInterval('PT72S'));         // Subtrai 72 segundos
// $data->add(new DateInterval('PT4H30M30S'));    // Adiciona 4 horas 30 minutos e trinta segundos 

// $data->add(new DateInterval('P1M'))->add(new DateInterval('PT1H'));  // Adiciona 1 mês + 1 hora

echo $data->format('d-m-Y H:i:s');
