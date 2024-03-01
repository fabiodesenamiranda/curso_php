
<?php

$host =  "localhost";
$user = "root";
$pass = "";
$db = "curso_php";   

$conn = new mysqli($host, $user, $pass, $db);


// ASSUNTO DA AULA //

$id = 4;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descrição = ? WHERE id = ?");

$nome = "Sofa";
$descrição = "Sofa semi novo";

 $stmt->bind_param("ssi", $nome, $descrição, $id);

 $stmt->execute();

 if($stmt->error) {
    echo "Erro: " . $stmt->error;
 }