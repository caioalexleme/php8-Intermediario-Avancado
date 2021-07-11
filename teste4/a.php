<?php


# INSTRUÇÕES CONDICIONAIS DO PHP NO HTML

$apresentar = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php
        if ($apresentar)
        {
            echo '<p>Este parágrafo é pra ser apresentado</p>';
        }
        else
        {
            echo '<p>Não existe nada para apresentar</p>';
        }
    
    ?>

    <?php if($apresentar): ?>
        <p>Este parágrafo é pra ser apresentado</p>
    <?php else: ?>
        <p>Não existe nada para apresentar</p>
    <?php endif; ?>

</body>
</html>