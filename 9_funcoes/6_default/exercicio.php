<?php

function defineCorCarro($cor = "vermelho") {

    return "a cor do Carro é: $cor";


}

$carroVermelho = defineCorCarro();

echo $carroVermelho . "<br>";


$carroAzul = defineCorCarro("Azul");

echo $carroAzul . "<br>";