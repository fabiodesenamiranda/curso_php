<?php

    $frase = "carro - navio - helicoptero - barco - jangada" ."<br>";

    $str = explode(" - ", $frase);

for($i = 0; $i < count($str); $i++) {

    echo "item: $str[$i] <br>";
}

    