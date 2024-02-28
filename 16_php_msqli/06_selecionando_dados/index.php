<?php

$host =  "localhost";
$user = "root";
$pass = "";
$db = "curso_php";   

$conn = new mysqli($host, $user, $pass, $db);



// ASSUNTO DA AULA //

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

//UM RESULTADO//

$item = $result->fetch_assoc();

//VARIOS RESULTADOS//

$itens = $result->fetch_all();


print_r($item);
print_r($itens);