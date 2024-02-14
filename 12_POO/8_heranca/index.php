<?php

class Humano {

    public $idade = 29;

    public function falar () {
        echo "Olá Mundo! <br>";

    }

    private function gritar(){
        echo "PHP É MUITO BOMMMM <br>";
    }

    public function acessaGritar() {
        $this->gritar();
    }

    protected function falarBaixo() {
        echo "lalalala <br>";
    }

    public function acessaFalarBaixo() {
        $this->falarBaixo();
    }

}

class Programador extends Humano {


}

$ze = new Humano;

$ze->falar() ."<br>";
$ze->acessaGritar() ."<br>";
$ze->acessafalarBaixo() ."<br>";


$fabio = new Programador;

echo $fabio->idade . "<br>";
$fabio->falar();
$fabio->acessaGritar();
$fabio->acessaFalarBaixo();