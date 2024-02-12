<?php

$arr = [
    'Fabio' => 29,
    'Maria' =>30,
    'Joaquim' => 40,
    'Maicon' => 42,

];

asort($arr);

print_r($arr);
echo "<br>"; 

$arr2 = [
    'Fabio' => 29,
    'Maria' =>30,
    'Joaquim' => 40,
    'Maicon' => 42,

];

arsort($arr2);

print_r($arr2);
echo "<br>"; 


$arr2 = [
    'Fabio' => 29,
    'Maria' =>30,
    'Joaquim' => 40,
    'Maicon' => 42,

];

ksort($arr2);

print_r($arr2);
echo "<br>"; 


$arr2 = [
    'Fabio' => 29,
    'Maria' =>30,
    'Joaquim' => 40,
    'Maicon' => 42,

];

krsort($arr2);

print_r($arr2);
echo "<br>"; 
