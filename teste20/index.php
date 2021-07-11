<?php

// FILESYSTEM
// CRIAR PASTAS NO PHP
// mkdir ( string $pathname , int $mode = 0777 , bool $recursive = false , resource $context = ? ) : bool

// Para criar uma pasta usamos a função mkdir
mkdir('pasta1');

// Criar uma pasta dentro de outra
// mkdir('pasta1/pasta2');

// Criar duas pastas dentro da outra ao mesmo tempo
// mkdir('teste/outra', 0777, true);

// Remover uma pasta
// rmdir('pasta1')