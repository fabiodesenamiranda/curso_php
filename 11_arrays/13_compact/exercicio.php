<?php
    $raca = "vira-lata";
    $nome = "turca";
    $idade = 3;
    $cor = "amarelo";


    $cao = compact("raca", "nome", "idade", "cor");

    print_r($cao);

    echo "<br>";


    foreach($cao as $caracteristica => $value) {
        echo "$caracteristica: $value <br> ";
    }