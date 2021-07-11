<?php
$localizacao = 'da sala';
$total_pessoas = 123;


// %s transforma-se num parâmetro de string
// echo sprintf("Existem %s pessoas dentro $s", $total_pessoas, $localizacao);

// %d trata o argumento como um valor numérico
// echo sprintf("Existe %d pessoas dentro %d", $total_pessoas, $localizacao);

// Se a ordem dos argumento for alterada, podemos usar o %1, %2, etc. para identificar qual o argumento, seguido de $ eo tipo de output pretendido.
// echo sprintf("Dentro %2$s foram encontrada %1$d pessoas", $total_pessoas, $localizacao);

// Podemos, inclusive, fazer várias referências a cada um dos valores
// echo sprintf("Dentro %2$s fora encontradas %1$d pessoas. %1$d é a capacidade máxima %2$s", $total_pessoas, $localizacao);

// A utilização do ' apóstrofe define o padding do caracter imediatamente seguinte.
// logo após o caracter escolhido, definimos o número de repetições desse caracter
// e depois o especificador que determina como vai ser tratado o valor do argumento.
// echo sprintf("Capacidade: %'-10d", $total_pessoas);

// A expressão seguinte irá apresentar lead-zeros ao número de pessoas.
// echo sprintf("Dentro %2$d estão %1$08d pessoas", $total_pessoas, $localizacao);