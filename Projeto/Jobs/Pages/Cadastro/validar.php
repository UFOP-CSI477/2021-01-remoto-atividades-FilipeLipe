<?php

    //echo "POST";
    //var_dump($_POST);
    include("../../Componentes/conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    
    $select = mysqli_query($conexao,"select * from users order by id desc");
    
    while($linha=mysqli_fetch_array($select)){
        if($linha["Email"] == $email){
            echo "Já possuimos um cadastro com esse email !!";  
            break;
        }else{
            echo "BATATAAAA ".$_POST['option'];
            if($_POST['option'] == "Empresa"){
                mysqli_query($conexao, "insert into users (Nome, Email, Senha, Tipo) values ('$nome', '$email', '$password', '1')");
            }else{
                mysqli_query($conexao, "insert into users (Nome, Email, Senha, Tipo) values ('$nome', '$email', '$password', '2')");
            }
            
            echo "Cadastro efetuado com sucesso!";
            break;
        }
    }
    
    header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/Login/index.html");