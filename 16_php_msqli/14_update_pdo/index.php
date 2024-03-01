<?php

    $host = "localhost";
    $db = "curso_php";
    $user = "root";
    $pass = "";


    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

    //ASSUNTO DA AULA //

    $id = 1;

    $nome = "Teclado Novo";

    $descrição = "Está na caixa";

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descrição = :descrição WHERE id = :id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descrição", $descrição);

    $stmt->execute();


