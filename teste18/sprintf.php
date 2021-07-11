<?php

// PERCEBENDO O FORMATO DE SPRINTF - PARTE 1

/*
A função sprintf retorna uma string formatada de acordo com um determinado formato.
Percebendo como funciona a definição desse formato para outras funções referidas no vídeo anterior.

Esta é a assinatura da função:
sprintf ( strinf $format , mixed ...$values ) : string

O $format (formato) é uma string composta de diretivas.
As diretivas são constituídas por caracteres que são copiados diretamente para o resultado da string e por especificações de conversão, cada uma das quais com outputs distintos.

As especificações de conversão seguem a seguinte filosofia:

    %[argnum$][flags][width][.precision]specifier

*/