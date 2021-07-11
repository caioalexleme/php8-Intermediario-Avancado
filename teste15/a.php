<?php

/*
PHP CLI SAPI
==================================================

No estudo do PHP é importante nunca esquecer que esta linguagem não é apenas usada para construção de website. Podemos usar o PHP para execução de operadores com linha de comando no terminal, quer seja de um servidor ou de um computador local.

De facto, muitos procedimentos são efetuados do lado do servidor sem que o PHP necessite de um ambiente visual para apresentação de dados.

Estes processos podem ser cronjob (serviços executados de acordo com uma determinada regularidade) ou executados manualmente na linha de comando.

O PHP contém uma CLI SAPI
    CLI - command line interface
    SAPI - Server application Programming interface

Permite executar instruções de uma forma muito simples.
A CLI permite não só executar processos, mas também apresentar output no terminal (neste caso não formatado em HTML, como é obvio.)

EXEMPLO:

1. Se queremos executar um comando de PHP
    php -r "phpinfo();" (-r permite executar o código sem as tags de PHP)
    php -r "echo 'Mensagem de teste';"

2. Se queremos executar um script de PHP:
    php [nome_do_script].php
    ou até mesmo executar um scriptsem extensão .php

*/