<?php

    $idade = 16;
    $idade2 = 18;
    $idade3 = 20;
    $print = "Deu certo! Entrou no if <br>";
    $print2 = "Deu certo!<br>";

    if($idade > $idade2) {
        echo "1 -"; 
        echo $print;
    }

    if($idade2 > $idade) {
        echo "2 -"; 
        echo $print;
    }


    if($idade2 > $idade3) {
        echo "3 -"; 
        echo $print;
    }

    if($idade3 > $idade2) {
        echo "4 -"; 
        echo $print;
    }

    if($idade > $idade || $idade < $idade2) {
        echo "5 -"; 
        echo $print2;
    }