<?php

/*
Navegando pelas pastas pelo terminal

PS C:\laragon\www\modulo2> cd C:\laragon\www\modulo2\teste22
PS C:\laragon\www\modulo2\teste22> cd ..
PS C:\laragon\www\modulo2> cd /
PS C:\> cd C:\laragon\www\modulo2\teste22
PS C:\laragon\www\modulo2\teste22> 
*/

// FILESYSTEM

mkdir(dirname(__FILE__) . '/pasta1');
chdir('pasta1');
touch('ficheiro1');
chdir('../');
touch('ficheiro2');

chdir(dirname(__FILE__) . '/pasta1');
touch('ficheiro');

