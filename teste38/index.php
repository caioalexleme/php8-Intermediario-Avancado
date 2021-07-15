<?php

// DATETIME - timezone

// ps: https://www.php.net/manual/en/timezones.php

$brasil_saopaulo = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
$brasil_campogrande = new DateTime('now', new DateTimeZone('America/Campo_Grande'));
$portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));

echo $brasil_saopaulo->format('d-m-Y H:i:s') . PHP_EOL;
echo $brasil_campogrande->format('d-m-Y H:i:s') . PHP_EOL;
echo $portugal->format('d-m-Y H:i:s') . PHP_EOL;