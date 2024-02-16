<?php

    class Humano {

        public function falar(){
            echo "Ola";
        }
    }


    $fabio = new Humano;

    $teste = 10;

    if(is_object($fabio)) {
        echo "e um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)) {
        echo "e um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($fabio) . "<br>";

    if(method_exists($fabio, "falar")) {
        echo "Metodo existe <br>";
    } else {
        echo "Metodo nao existe <br>";
    }