<?php

    require './bd/connection.php';

    $nome = $_POST['nome'];
    $um = $_POST['um'];

    $stmt = $connection->prepare("insert into produtos (nome, um) values(:nome, :um)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':um', $um);

    $stmt->execute();

    header('location: view.php');
    exit();