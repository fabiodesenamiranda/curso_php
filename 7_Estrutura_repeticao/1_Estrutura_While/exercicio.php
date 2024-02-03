<?php

$arr = [10, "Fabio", 2.23, true, "Ölga", [1,2,3], false, "teste", 10, "Itu"];

$x = count($arr);

$y = 0;

while($y < $x) {
    
    if(is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }

    $y++;
}