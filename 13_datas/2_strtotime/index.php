<?php

    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");

    echo $dezDias . "<br>";


    $dataAtual = date('d/m/y',  $cincoDias);

    echo $dataAtual . "<br>";

    $dataAtual2 = date('d/m/y', $dezDias);

    echo $dataAtual2 . "<br>";

    $doisMeses = strtotime('2 months');

    echo $doisMeses . "<br>";

    $dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);

    echo $dataAtualMaisDoisMeses . "<br>";

    $dozeAnos = strtotime("12 years");

    echo date('d/m/Y', $dozeAnos) . "<br>";

