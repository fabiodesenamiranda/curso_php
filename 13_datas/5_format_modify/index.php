<?php   

    $data = new DateTime();

    echo $data->format('d/m/y') . "<br>";

    echo $data->format('D/M/Y') . "<br>";

    echo $data->format('l/F/Y') . "<br>";



//data mais 5 dias
$data->modify('+ 5 days');
echo $data->format('d/m/y') . "<br>";

$data->modify('+ 2 months');
echo $data->format('d/m/y') . "<br>";


$data->modify('- 2 years');
echo $data->format('d/m/y') . "<br>";