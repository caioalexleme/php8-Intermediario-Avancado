<?php

// FILESYSTEM

/*
Vamos ver como podemos gravar um texto  completo num ficheiro, e como ler esse texto completo para o interior de uma variável de PHP
*/

// Gravar texto completo

$texto = 'lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla voluptates deserunt dolorem iste ducimus enim fugit totam pariatur nam sed. Et quisquam similique voluptas consequuntur! Praesentium incidunt a fuga nemo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora saepe corporis esse veritatis repudiandae! Deleniti id consequuntur sequi enim hic iusto ullam dolore vitae sint placeat dolorem, autem libero dolor.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam unde vero optio, aliquam officia magnam perspiciatis ullam expedita rem accusantium. A quos quis reprehenderit autem maiores molestias optio maxime incidunt.';

# file_put_contents('texto_completo.txt', $texto);

// Esta função é equivalente a chamar fopen, fwrite e fclose tudo na mesma função.


# Ler todo conteúdo de um ficheiro para uma variável
$texto = file_get_contents('texto_completo.txt');
echo $texto;