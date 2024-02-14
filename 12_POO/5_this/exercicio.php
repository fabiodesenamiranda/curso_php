<?php

    class Carro {

        public $cor;
        public $teto;
        public $velocidadeMaxima;


        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima =$vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade maxima deste carro é: $this->velocidadeMaxima km/h <br>";
        }

    }

    $bmw = new Carro;

    $bmw->cor = "Branco";
    $bmw->teto = true;

    $bmw->setVelocidadeMaxima(200);

    $bmw->getVelocidadeMaxima();

    $ferrari = new Carro;

    $ferrari->setVelocidadeMaxima(400);

    $ferrari->getVelocidadeMaxima();