<?php

    class Cachorro {

        function latir() {
            echo "o cachorro late <br>";

        }

        function andar($m) {
            echo "o cachorro anda de um lado a outro $m metros <br>";
        }
    }


    $toto = new Cachorro;

    $toto->andar(100);
    $toto->latir();