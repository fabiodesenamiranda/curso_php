<?php

    trait Objeto {
        public function teste(){
            echo "testando trait de objeto <br>";
        }
    }

    trait Testando {

        public function traitTeste(){
            echo "este método é de trait testando <br>";
        }

    }

    class Central {
        use Objeto;
    }

    $x = new Central;

    $x->teste();

    // $x->traitTeste();