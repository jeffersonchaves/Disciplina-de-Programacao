<?php

    define('MEGA' , 1);
    define('QUINA', 2);
    define('MANIA', 3);
    define('FACIL', 4);

    $jogoSelecionado =$_GET['jogoselecionado'];

    function carregarRegrasDo($jogoSelecionado){

        $regras = [
            MEGA  => ['nome'=>"Mega Sena", 'min'=>6,  'max'=>15, 'possibilidades'=>60],
            QUINA => ['nome'=>"Quina",     'min'=>5,  'max'=>15, 'possibilidades'=>80],
            MANIA => ['nome'=>"Lotomania", 'min'=>50, 'max'=>50, 'possibilidades'=>100],
            FACIL => ['nome'=>"LotoFacil", 'min'=>15, 'max'=>18, 'possibilidades'=>25],
        ];

        return $regras[$jogoSelecionado];
    }

    $regrasDoJogo = carregarRegrasDo($jogoSelecionado);
    echo "<pre>";
    print_r($regrasDoJogo);
    echo "</pre>";

    require 'tela_apostas.phtml';
