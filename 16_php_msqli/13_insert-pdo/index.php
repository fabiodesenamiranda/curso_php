<?php

    $host = "localhost";
    $db = "curso_php";
    $user = "root";
    $pass = "";


    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

    //ASSUNTO DA AULA //

    $stmt = $conn ->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descrição)");

    $nome = "Suporte monitor";

    $descrição = "O Suporte monitor é novo";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descrição", $descrição);

    $stmt->execute();

