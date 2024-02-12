<?php

    $fabio = [
        'nome' => 'Fabio',
        'idade' => 20,
        'profissao' => 'Programador'

    ];

    $maria = [
        'nome' => 'Maria',
        'idade' => 28,
        'profissao' => 'Gerente'
    ];

    foreach($fabio as $carac => $value) {
        echo "$carac => $value <br>";
    }

    echo "<br>";

    foreach($maria as $carac => $value) {
        echo "$carac => $value <br>";
    }