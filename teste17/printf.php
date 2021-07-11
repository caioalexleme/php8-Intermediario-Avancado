<?php

// PRINTF | SPRINTF | FPRINF | VPRINTF | VSPRINTF | VFPRINTF | SSCANF | FSCANF
// ----------------------------------------------------------------------------

/*

Existem várias funções com terminologia muito semelhante cuja principal finalidade é o output, a gravação e stream ou retorno de strings formatadas de acordo com várias regras ou diretivas.

Estas funções são particularmente complexas, porquê contém um leque muito variado de possibilidades de formatação. Vamos olhar para o caso do printf com alguns exemplos.

*/

/*
printf - Mostra uma string formatada (com um número variável de argumentos)
sprintf - Retorna a string formatada
vprintf - Mostra uma string formatada (mais um array de argumentos)
sscanf - Interpreta a entrada de uma string de acordo com um formato
fscanf - Interpreta a leitura de um arquivo de acordo com um formato

*/

// --------------------------------------------------------------------------
// todas estas funções recorrem ao mesmo tipo de formatação, que veremos mais adiante.
// --------------------------------------------------------------------------

// Podemos usar a função para simplesmente fazer o output do texto
printf('Olá mundo');

// Substitui o %s pelo argumento em sequência.
printf("O meu nome é %s e o apelido é %s", 'João', 'Ribeiro');

// vamos ver aplicações mais avançadas
$valor = 65;

// apresenta o código binário do valor
printf("%b", $valor);

// apresenta o caracter cujo código ASCII é indicado em $valor
printf("%c", $valor);

// American Standard Code for Information Interchange
// https://upload.wikimedia.org/wikipedia/commons/d/dd/ASCII-Table.svg

// O valor é apresentado como um inteiro.
// Se valor for uma string alfanumérica, vai dar zero. Se for uma string com valor numérico, apresenta o número
printf("%d", $valor);