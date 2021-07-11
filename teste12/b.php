<?php

# STRSTR

# Retorna o resto da string a partir de uma ocorrência

$a = 'Frase de testes no sistema';
echo strstr($a, 'de');      // de testes no sistema
echo '<br>';
echo strstr($a, 'n');       // no sistema

# Esta função é case sensitive
// Para usar a mesma função no modo case insensitive, usamos stristr()

# Existe um terceiro parâmetro que permite definir a parte da string que pretendemos obter. Por defeito, não usamos esse parâmetro, a string obtida é o resto da string incluido a needle.
# Se usarmos $before_needle = true, vamos obter a parte inicial da string até a needle, excluindo a needle

echo '<br>';
echo strstr($a, 'n', true);     // Frase de testes 