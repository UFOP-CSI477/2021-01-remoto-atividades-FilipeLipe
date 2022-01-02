<?php

    //echo "POST";
    //var_dump($_POST);
    include("./db/conexao.php");

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    if($user == "admin" && $password =="123"){
        echo "<h1>Ola $user</h1>";
    }else{
        echo "<h1>Usuario ou senha errado!</h1>";
        mysqli_query($conexao, "insert into login (Usuario, Senha) values ('$user', '$password')");
        echo "Cadastro efetuado com sucesso!";
    }

    echo "<a href=\"index.php\"> Voltar </a>";
    echo "<a href=\"lista.php\"> Listar </a>";
    //header("location:lista.php");