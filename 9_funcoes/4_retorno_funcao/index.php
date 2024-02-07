<?php
    
    function soma($n1, $n2) {

        echo $n1 + $n2;
    }

    soma(4,4);


    echo "<br>";

    function soma2($n1, $n2) {

        return $n1 + $n2;

    }

    $x = soma2(14,4);

    echo $x . "<br>"; 
    

    $y = ($x + 10);

    echo $y . "<br>";

   echo "<br>";