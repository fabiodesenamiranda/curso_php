<?php

class Cachorro {

    public $nome;
    public $cor;
    public $patas; 

    function __construct($nome, $cor, $patas) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas; 
    }

    public function exibirAnimal(){ 
       echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas <br>"; 
    }
}

$chico = new Cachorro("Chico", "Caramelo", 4);
$chico->exibirAnimal();

$nome = "Tubarao";
$cor = "Preto";
$patas = 4;

$tubarao = new Cachorro($nome, $cor, $patas);

$tubarao->exibirAnimal();