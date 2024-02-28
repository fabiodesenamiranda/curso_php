<?php

$host =  "localhost";
$user = "root";
$pass = "";
$db = "curso_php";   

$conn = new mysqli($host, $user, $pass, $db);



// ASSUNTO DA AULA //

$query = "SELECT * FROM itens";

$result = $conn->query($query);

print_r($result);


$conn->close();