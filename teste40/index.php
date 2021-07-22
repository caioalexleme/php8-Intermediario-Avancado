<?php

// EXEMPLO DE FUNÇÃO PARA CALCULAR A IDADE
$data_nascimento = new DateTime('21-07-1973');

echo calcular_idade($data_nascimento);

function calcular_idade($data_nascimento){
    $agora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    // primeiro cálculo dos anos
    if($agora->format('Y') == $data_nascimento->format('Y')){
        // Verifica se estamos no mesmo ano
        $anos = 1;
    }else{
        $anos = $agora->format('Y') - $data_nascimento->format('Y');
    }

    // Validar oano de forma precisa
    // se ainda não chegamos ao "nosso" mês, temos menos 1 ano do que é calculado
    if($agora->format('m') < $data_nascimento->format('m')){
        $anos--;
    }elseif($agora->format('m') == $data_nascimento->format('m')){
        //Estamos no mês do nosso aniversário
        // Vamos ver se o dia já chegou
        if($agora->format('d') < $data_nascimento->format('d')){
            $anos--;
        }
    }
    return $anos !=1 ? "$anos anos" : "1 Ano";
}