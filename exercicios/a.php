<?php

    // EXERCÍCIO: Apresentar os dados de uma coleção numa tabela de HTML

    // ESTUTURA: Nome, Gênero, País

    $dados = [
        ['João', 'M', 'Portugal'],
        ['Ana', 'F', 'Brasil'],
        ['Carlos', 'M', 'Angola'],
        ['Matilde', 'F', 'Moçambique']
    ];

    $d = [['Caio', 'Vânia', 'Johnson'], ['Matheus', 'Valda', 'Raquel']];
    foreach($d as $c){
        echo $c[1].'<br>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid;
        }
        #cab{
            text-decoration-style: solid;
        }
        td{
            border:inset;
        }
    </style>
</head>
<body>
    
    <table>
        <tr id="cab"><td><strong>Nome</strong></td><td><strong>Gênero</strong></td><td><strong>País</strong></td></tr>
        <tr><td><?=$dados[0][0]?></td><td><?=$dados[0][1]?></td><td><?=$dados[0][2]?></td></tr>
        <tr><td><?=$dados[1][0]?></td><td><?=$dados[1][1]?></td><td><?=$dados[1][2]?></td></tr>
        <tr><td><?=$dados[2][0]?></td><td><?=$dados[2][1]?></td><td><?=$dados[2][2]?></td></tr>
        <tr><td><?=$dados[3][0]?></td><td><?=$dados[3][1]?></td><td><?=$dados[3][2]?></td></tr>

    </table>

    <table>
        <thead>

            <th>Nome</th>
            <th>Gênero</th>
            <th>País</th>
        
        </thead>
        
        <tbody>

            <?php foreach($dados as $item): ?>
        
                <tr>
                    <td><?= $item[0] ?></td>
                    <td><?= $item[1] ?></td>
                    <td><?= $item[2] ?></td>
                </tr>

            <?php endforeach;?>

        </tbody>
    </table>

</body>
</html>