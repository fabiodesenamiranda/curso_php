<?php

$a = 12;
$b = 89;
$c = "teste";

if(is_int($a) || is_float($a)) {
    $multi1 = $a * 2;

    if($multi > 100) {
        echo "o numero é maior que 100<br>";

    } else {
        echo "o numero não é maior que 100<br>";
    }
} else {
    echo "Não é um numero <br>";
}


if(is_int($b) || is_float($b)) {
    $multi1 = $b * 2;

    if($multi > 100) {
        echo "o numero é maior que 100<br>";

    } else {
        echo "o numero não é maior que 100<br>";
    }
} else {
    echo "Não é um numero <br>";
}
