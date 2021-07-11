<?php

// PRINT

/*
O print é construção da liguagem muitos semelhante ao echo.
As principais diferenças são:
    1. print aceita apenas 1 argumento
    2. print retorna sempre o valor 1

*/

$nome = 'João';
$apelido = 'Ribeiro';

print "$nome $apelido<br>";     # Válido

print $nome. ' ' . $apelido. '<br>';    # Também é válido

// print $nome, ' ', $apelido;     # inválido

echo $nome, $apelido, '<br>';


if(print($nome)){
    print(" $apelido");
}

// Tal como acontece no echo, podemos usar o print para apresentar resultados de uma função

print '<br>';
print strlen("Ribeiro");    // 7

// Preferencialmente devemos usar o echo, por ser mais rápido. o echo permite uma sintaxe mais curta no HTML

?>

<p><?php echo "João" ?></p>
<p><?= 'João' ?></p>
<p><?php print "João" ?></p>