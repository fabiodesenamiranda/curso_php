<?php

    $dataNascimento = mktime(02, 12, 33, 01, 02,1984);

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

    echo $dataNascimentoFormatada . "<br>";


    $dataEspecifica = mktime(01, 22, 33, 01, 02,2041);

    echo $dataEspecifica . "<br>";

    $dataEspecificaFormatada = date('d/m/Y', $dataEspecifica);

    echo $dataEspecificaFormatada . "<br>";

