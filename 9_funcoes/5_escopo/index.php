<?php

    $a = 10;

    $b = 15;

    function testeEscopo(){

        $a = 5;

        global $b;

        $a++;
        $b++;


        echo "ESCOPO LOCAL DE A: $a <br>";
        echo "ESCOPO GLOBAL NA FUNCAO DE B: $b <br>";


    }

    echo "ESCOPO GLOBAL DE A: $a <br>";
    echo "ESCOPO GLOBAL DE B: $b <br>";


    testeEscopo();


