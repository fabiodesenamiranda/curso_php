<?php

$host =  "localhost";
$user = "root";
$pass = "";
$db = "curso_php";   

$conn = new mysqli($host, $user, $pass, $db);



// ASSUNTO DA AULA //

$table = "itens";
$nome = "xicara";
$descricao = "uma xicara usada de cor rosa"; 

$q = "INSERT INTO $table (nome, descrição) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();