<?php

    class Humano {

    }

    class Animal {


    }

    class Professor extends Humano {

    }

    $fabio = new Humano;

    $turca = new Animal;

    $pedro = new Professor; 

    if($fabio instanceof Humano ) {
        echo "FAbio é um humano <br>";
    } else {
        echo "Fabio  não é um humano <br>";
    }

    if($turca instanceof Humano ) {
        echo "turca é um humano <br>";
    } else {
        echo "turca  não é um humano <br>";
    }

    if($pedro instanceof Professor ) {
        echo "Pedro  é um professor <br>";
    } else {
        echo "Pedro  não é um professor <br>";
    }

    if($pedro instanceof Humano ) {
        echo "Pedro é um humano <br>";
    } else {
        echo "Pedro  não é um humano <br>";
    }
