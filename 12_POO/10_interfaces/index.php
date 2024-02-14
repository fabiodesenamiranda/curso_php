<?php

interface Caracteristicas {

    const nome = "Fabio";

    public function falar();
}

class Humano implements Caracteristicas {

    public $idade = 30;

    public function falar() {
        echo "ola mundo <br>";
    } 

    public function dizerNome(){
        echo "Meu nome ;e " .self::nome . "<br>";
    }
}


$fabio = new Humano;