<?php

    class Pessoa {

        public $nome = "Fabio";
        public $idade = 40;

        function andar($m){
            echo "O Sr Fabio andou $m metros <br>";
        }
        
    }

    $vizinho = new Pessoa;

   
    echo $vizinho->idade ."<br>";
    echo $vizinho->nome . "<br>";

    $vizinho->andar(10);
    

