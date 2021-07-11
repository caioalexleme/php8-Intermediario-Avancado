<?php

// UNIX TIMESTAMP

/*
Existe um valor numérico muito importante para as linguagens de programação e, de um modo especial para as bases de dados, que é o Unix Timestamp.
Basicamente, o Unix Timestamp é o total de segundos decorridos desde 1 de janeiro de 1970, que é a data que marca o início da era do sistea Unix

*/

echo time();

// Se quisermos o mesmo valor em microsegundos, podemos usar a seguinte função:
echo '<br>';
echo microtime();