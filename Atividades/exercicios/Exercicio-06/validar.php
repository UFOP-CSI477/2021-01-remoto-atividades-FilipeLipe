<?php

    //echo "POST";
    //var_dump($_POST);

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    if($user == "admin" && $password =="123"){
        echo "<h1>Ola $user</h1>";
    }else{
        echo "<h1>Usuario ou senha errado!</h1>";
    }

    echo "<a href=\"index.php\"> Voltar </a>";