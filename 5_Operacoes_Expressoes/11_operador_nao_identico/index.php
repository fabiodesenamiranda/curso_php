<?php

$a = 1;
$b = "1";

if($a != $b) {
    echo "A é diferente de B 1<br>";
}

if($a !==$b) {
    echo "A é diferente de B 2<br>";
}


if(1 !== 2) {
    echo "nao  é identico 3<br>";
}

if([] !== "123") {
    echo "nao  é identico 4<br>";
}