<?php

    function pessoa($nome, $idade, $genero){

        echo "Olá eu sou $genero $nome e tenho $idade anos <br>";
 

    }


    pessoa("Fabio", 40, "o");
    pessoa("Maria", 42, "a");


echo "<br>";
echo "<br>";


function verifica($num){

    if($num % 2 === 0 ) {
        echo "O numero $num é par <br>";
    } else {
        echo "O numero $num é impar <br>";
    }
}


verifica(13);
verifica(52);
verifica(101);
verifica(47);
