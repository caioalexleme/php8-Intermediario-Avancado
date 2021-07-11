<?php
    $nomes = ['João', 'Carlos', 'Ana'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    #cor{
        color: blue;
    }
</style>
</head>
<body>
    
        <!-- Apresentar nomes em lista -->

    <?php
        echo "<ul id=\"cor\">";   # echo '<ul id="cor">';   (mesmo resultado, usando aspas simples)
        foreach($nomes as $nome){
            echo "<li>$nome</li>";
        }
        echo '</ul>'
    
    ?>

    <!-- ---------------------------------- -->

        <ul id="cor">
            <?php foreach($nomes as $nome):?>
                <li><?= $nome?></li>            
            <?php endforeach;       # ':' e 'endfor;' substitui as chavetas/chaves (mesmo resultado) ?>

        </ul>

</body>
</html>