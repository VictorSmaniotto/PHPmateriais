<?php

    //Crie um array com características de um carro

    $carro = ['marca' => 'Volkswagen', 'tipo' => 'gol', 'cor' => 'branco', 'ano' => 2020];

    print_r($carro);
    echo '<br>';
    print_r($carro['marca']);
    echo '<br>';
    echo($carro['ano']);

    $marca = $carro['marca'];
    $ano = $carro['ano'];
    $cor = $carro['cor'];
    $tipo = $carro['tipo'];
    echo '<br>';
    echo "Vendo um $marca $tipo, ano $ano, cor $cor";