<?php

    $data = new DateTime();

    print_r($data);
    echo "<br>";

    $data->setDate(2000, 12, 01);

    print_r($data);
    echo "<br>";

    $data->setTime(5, 12, 10);
    print_r($data);
    echo "<br>";

    echo $data->format('d/m/yy') . "<br>";