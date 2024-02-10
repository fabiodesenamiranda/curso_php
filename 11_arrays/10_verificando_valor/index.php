<?php

    $arr = [
        'nome' => 'Fabio',
        'ìdade' => 40
    ];

    if(array_key_exists('nome', $arr)){
        echo "a chave existe <br>";

    } else {
        echo "a chave nao existe <br>";
    }


    $arr = [
        'nome' => 'Fabio',
        'ìdade' => 40
    ];

    if(array_key_exists('profissão', $arr)){
        echo "a chave existe <br>";

    } else {
        echo "a chave nao existe <br>";
    }


    if(isset($arr['nome'])) {

        echo "a chave existe <br>";
    } else {
        echo "a chave nao existe <br>";
    }