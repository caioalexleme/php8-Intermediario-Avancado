<?php

# CICLOS DE PHP NO HTML

/*
A escrita de código PHP deve ser o mais simples possível para facilitar a leitura do fluxo. Por outro lado, devemos procurar criar condições para rapidamente alterar o aspecto visual dos dados que apresentamos.

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cor {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        // Usando só o PHP
        for ($i = 100; $i < 120; $i++) :
            echo "<p class=\"cor\">$i</p>";              # ':' e 'endfor;' substitui as chavetas/chaves (mesmo resultado)
            
        endfor;
    ?>

    <hr>

    <!-- HTML + PHP -->
        <?php for ($i = 100; $i < 120; $i++) : ?>
            <p class="cor"><?= $i ?></p>
        <?php endfor; ?>
        

</body>
</html>