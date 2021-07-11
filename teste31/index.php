<?php

// DATAS E HORAS

/*
A utilização de datas e horas numa aplicação é fundamental e praticamente sempre presente em todos os projetos. No PHP existe a possibilidade de usarmos algumas funções mais antigas para a apresentação de datoas e horas, ou utilizar uma metodologia mais próxima da programação orientada a objetos com a classe DateTime.

Vamos ver um exemplo simples de apresentação de uma data formatada.
Neste caso, iremos sepre usar a data do sistema.
*/

echo 'Empresa (c) ' . date('Y');  // Aparece o ano com 4 dígitos
echo 'Empresa (c) ' . date('y');  // Aparece o ano com 2 dígitos
echo 'Empresa (c) ' . date('d/m//y');
echo 'Empresa (c) ' . date('D/M//Y');
echo 'Empresa (c) ' . date('d/m//Y H:i:s');