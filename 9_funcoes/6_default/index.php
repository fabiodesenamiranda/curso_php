<?php
    function teste($a = "teste") {
         
        echo "o valor de A é: $a <br>";

    }


    teste();
    teste("asd");

    function testando ($b, $a = "x") {  //valor default
        echo "O valor de A é: $a e b é de b:$b <br>";
    }


    testando("asd");