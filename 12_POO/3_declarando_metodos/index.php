<?php

    class Pessoa {

        function falar() {
            echo "Olá eu sou um objeto <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }

    }

    $fabio = new Pessoa;

    $fabio->falar();

    $joao = new Pessoa;

    $joao->falar();

    $fabio->somar(2, 2);
    $joao->somar(4, 6);

