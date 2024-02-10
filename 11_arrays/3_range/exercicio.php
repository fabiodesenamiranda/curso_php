<?php

    $arr = range(10, 45);
    // print_r($arr);
    // echo "<br>";

    for($i = 0; $i < count($arr); $i++) {
        $soma = $arr[$i] + 6;

        echo $soma . "<br>";

        if($soma > 30) {
            echo "numero é muito alto <br>";
        }
    }




