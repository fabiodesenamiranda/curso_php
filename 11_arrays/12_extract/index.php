<?php

    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retangulo',
        'material' => 'aço'
    ];

    extract($arr);
    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";