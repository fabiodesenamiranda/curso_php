<?php
    $x = 10;
    $y = & $x;


    echo $x;
    echo"<br>";
    echo $y;
    echo"<br>";

    $y = 15;

    echo"Atribuicao";
    echo"<br>";
    echo $x;
    echo"<br>";
    echo $y;
    echo"<br>";

    $x = 20;

    echo"Atribuicao";
    echo"<br>";
    echo $x;
    echo"<br>";
    echo $y;
    echo"<br>";

    $nome = "Fabio";
    $nome2 = & $nome;

    echo $nome;
    echo"<br>";
    echo $nome2;
    echo"<br>";