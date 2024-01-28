<?php

    $arr = ['altura' => 1.70, 'idade' => 20, 'cor' => 'branca'];

    echo "<br>";

    print_r($arr);

    $idade = $arr['idade'];

    echo "<br>";

    if($idade >= 18) {
        echo "é maior de 18";
    }

