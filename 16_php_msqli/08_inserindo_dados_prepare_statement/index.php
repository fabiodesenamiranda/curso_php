<?php

$host =  "localhost";
$user = "root";
$pass = "";
$db = "curso_php";   

$conn = new mysqli($host, $user, $pass, $db);


// ASSUNTO DA AULA //

$nome = "Suporte de microfone";
$descricao = "O suporte é novo";

$stmt = $conn->prepare("INSERT INTO itens (nome, descrição) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao);

$stmt->execute();