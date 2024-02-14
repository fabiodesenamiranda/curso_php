<?php

    class Humano {

        public $idade = 40;
        public $sexo = "masculino";

        public function falar() {
            echo "Nós falamos <br>";
        } 

    }
 
    class Professor extends Humano {

        public $disciplina = "Matematica";
        public function lecionando() {
            echo "professor esta lecioando $this->disciplina <br>";

        }
    }


    $marcos = new Humano;
    echo $marcos->idade ."<br>";
    echo $marcos->sexo ."<br>";
    $marcos->falar();


   $joao = new Professor;
   $joao->lecionando();
   echo "$joao->sexo <br>";
