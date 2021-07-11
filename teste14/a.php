<?php

// NUMBER FORMAT
// Apresenta um número formatado de várias formas

// IMPORTANTE: existe no PHP a função money_format(), mas foi descontinuada a partir da versão 7.4. Não deve ser usada em novos projetos

/*
    A assinatura desta função é constituída por 4 parâmetros
    $num            - O valor que pretendemos formatar
    $decimais       - O número de casas decimais a apresentar
    $dec_point      - O caracter que vai ser apresentado para separar a parte inteira da parte decimal
    $thousand_sep   - O caracter que vai ser apresentado na separação do número em milhares

*/

$valor = 100;
echo number_format($valor, 0, null, null);      // 100 (Vai ser usar os valores por defeito)

echo number_format($valor, 2, ',', null);       // 100,00

$valor = 100.45;
echo number_format($valor, 3, ',', null);       // 100,450

echo number_format($valor, 1, ',', null);       // 100,5

$valor = 123456.758;
echo number_format($valor, 2, ',', '.');    
// Caso não queira apresentar o separador de milhares, use '' (vazio), senão é apresentado uma vírgula (,)

$valor = 125.2;
echo number_format($valor, 2, ',', '.') . ' €';